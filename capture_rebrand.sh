#!/bin/bash
cd /home/z/my-project/hms
unset DATABASE_URL
export PATH="/home/z/.local/bin:$PATH"
export LD_LIBRARY_PATH="/home/z/.local/php/usr/lib/x86_64-linux-gnu:$LD_LIBRARY_PATH"
export PHPRC="/home/z/my-project/hms/php.ini"

# Clear caches
php artisan config:clear 2>&1 | tail -1
php artisan view:clear 2>&1 | tail -1
php artisan cache:clear 2>&1 | tail -1

# Kill any existing server
pkill -f "php.*3000" 2>/dev/null
sleep 1

# Start server on 0.0.0.0:3000
php -S 0.0.0.0:3000 server.php >> /tmp/hms_server.log 2>&1 &
sleep 2

echo "=== Taking Rebranded Screenshots ==="

# 1. Login page screenshot
agent-browser open http://localhost:3000/login
sleep 2
agent-browser screenshot --full /home/z/my-project/download/tenadam_login.png
echo "1. Login page captured"

# 2. Fill and login
agent-browser snapshot -i 2>&1 | python3 -c "
import sys, re
text = sys.stdin.read()
em = re.search(r'textbox \"Email.*?\[ref=(e\d+)\]', text)
pw = re.search(r'textbox \"Password.*?\[ref=(e\d+)\]', text)
bt = re.search(r'button \"Login\" \[ref=(e\d+)\]', text)
if em and pw and bt:
    print(em.group(1), pw.group(1), bt.group(1))
else:
    print('NOT_FOUND')
" > /tmp/refs.txt

REFS=$(cat /tmp/refs.txt)
if [ "$REFS" != "NOT_FOUND" ]; then
    EMAIL_REF=$(echo $REFS | awk '{print $1}')
    PASS_REF=$(echo $REFS | awk '{print $2}')
    BTN_REF=$(echo $REFS | awk '{print $3}')
    
    agent-browser fill @$EMAIL_REF "admin@tenadam.com"
    agent-browser fill @$PASS_REF "123456789"
    agent-browser click @$BTN_REF
    echo "2. Logged in"
    sleep 6
    
    # 3. Dashboard screenshot
    agent-browser screenshot --full /home/z/my-project/download/tenadam_dashboard.png
    echo "3. Dashboard captured"
    agent-browser get url
else
    echo "2. FAILED - could not find form refs"
fi

echo "=== Done ==="