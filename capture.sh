#!/bin/bash
cd /home/z/my-project/hms
unset DATABASE_URL
export PATH="/home/z/.local/bin:$PATH"
export LD_LIBRARY_PATH="/home/z/.local/php/usr/lib/x86_64-linux-gnu:$LD_LIBRARY_PATH"
export PHPRC="/home/z/my-project/hms/php.ini"

pkill -f "php.*3000" 2>/dev/null; sleep 1

# 1. Start server
php -S 0.0.0.0:3000 server.php >> /tmp/hms_server.log 2>&1 &
sleep 2

# 2. Login page screenshot
agent-browser open http://localhost:3000/login
sleep 1
agent-browser screenshot --full /home/z/my-project/download/hms_login.png
echo "=== Login screenshot saved ==="

# 3. Fill and submit using find (more reliable than refs)
agent-browser find label "Email" fill "admin@hms.com"
agent-browser find label "Password" fill "123456789"
agent-browser find role button click --name "Login"
echo "=== Login submitted, waiting... ==="
sleep 6

# 4. Dashboard screenshot (whatever page we're on)
agent-browser screenshot --full /home/z/my-project/download/hms_after_login.png
echo "=== After-login screenshot saved ==="
agent-browser get url