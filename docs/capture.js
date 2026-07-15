const { chromium } = require('playwright');
const { spawn } = require('child_process');
const fs = require('fs');

const DIR = process.argv[2];
const EMAIL = process.argv[3];
const NAME = process.argv[4];
const TARGET_URL = process.argv[5] || null;
const PORT = 8000;

(async () => {
  // Start PHP server inline
  const server = spawn('/home/z/.local/php/bin/php', [
    '-c', '/home/z/.local/php/php.ini',
    '-S', `0.0.0.0:${PORT}`,
    '-t', '/home/z/my-project/hms/public'
  ], { stdio: 'ignore' });

  // Wait for server to be ready
  await new Promise(resolve => setTimeout(resolve, 2000));

  const browser = await chromium.launch({ headless: true });
  const context = await browser.newContext({
    viewport: { width: 1440, height: 900 },
    deviceScaleFactor: 2,
  });
  const page = await context.newPage();

  try {
    console.log(`[${NAME}] Loading login...`);
    await page.goto(`http://127.0.0.1:${PORT}/login`, { waitUntil: 'domcontentloaded', timeout: 30000 });
    await page.waitForSelector('input[name="email"]', { state: 'visible', timeout: 15000 });
    await page.waitForTimeout(1000);

    await page.evaluate(() => {
      document.querySelectorAll('.authImage, [class*="bgi-attachment-fixed"], .overlay').forEach(el => {
        el.style.display = 'none';
        el.style.pointerEvents = 'none';
      });
    });
    await page.waitForTimeout(300);

    console.log(`[${NAME}] Filling ${EMAIL}...`);
    await page.evaluate(({email, pw}) => {
      const s = Object.getOwnPropertyDescriptor(window.HTMLInputElement.prototype, 'value').set;
      const e = document.querySelector('input[name="email"]');
      const p = document.querySelector('input[name="password"]');
      s.call(e, email); e.dispatchEvent(new Event('input', { bubbles: true }));
      s.call(p, pw); p.dispatchEvent(new Event('input', { bubbles: true }));
    }, { email: EMAIL, pw: '123456789' });
    await page.waitForTimeout(200);

    console.log(`[${NAME}] Submitting...`);
    const navPromise = page.waitForURL(url => !url.pathname.includes('/login'), { timeout: 25000 }).catch(() => null);
    await page.evaluate(() => document.querySelector('button[type="submit"]').click());
    await navPromise;

    if (page.url().includes('/login')) {
      console.log(`[${NAME}] Trying form.submit...`);
      const nav2 = page.waitForURL(url => !url.pathname.includes('/login'), { timeout: 15000 }).catch(() => null);
      await page.evaluate(() => { try { document.querySelector('form').submit(); } catch(e) {} });
      await nav2;
    }

    if (page.url().includes('/login')) {
      const err = await page.evaluate(() => {
        const a = document.querySelector('.alert, .alert-danger');
        return a ? a.innerText.trim() : 'none';
      }).catch(() => '?');
      console.log(`[${NAME}] FAIL: stuck on login. error=${err}`);
      process.exit(1);
    }

    console.log(`[${NAME}] Logged in -> ${page.url()}`);

    if (TARGET_URL) {
      console.log(`[${NAME}] Navigating to ${TARGET_URL}...`);
      await page.goto(`http://127.0.0.1:${PORT}${TARGET_URL}`, { waitUntil: 'domcontentloaded', timeout: 30000 }).catch(e => {});
    }

    try { await page.waitForLoadState('networkidle', { timeout: 25000 }); } catch(e) {}
    console.log(`[${NAME}] Waiting for content...`);
    await page.waitForTimeout(6000);

    try {
      await page.waitForFunction(() => {
        const spinners = document.querySelectorAll('.spinner-border,.fa-spinner,.fa-circle-notch');
        for (const s of spinners) { if (s.offsetHeight > 0) return false; }
        return true;
      }, { timeout: 8000 });
    } catch(e) {}

    await page.waitForTimeout(3000);

    const outPath = `${DIR}/${NAME}.png`;
    await page.screenshot({ path: outPath, fullPage: true, type: 'png' });
    const size = fs.statSync(outPath).size;
    console.log(`[${NAME}] DONE ${Math.round(size/1024)}KB url=${page.url()}`);

  } catch (e) {
    console.error(`[${NAME}] FATAL: ${e.message.substring(0, 200)}`);
    process.exit(1);
  } finally {
    await context.close();
    await browser.close();
    server.kill();
  }
})();