#!/bin/bash
cd /home/z/my-project/hms

# Kill existing
pkill -9 -f "php -S" 2>/dev/null
pkill -f "node server" 2>/dev/null
sleep 1

# Start PHP with router on port 8000 directly
PHP_CMD="/home/z/.local/php/bin/php -n -c /home/z/.local/php/php.ini -S 0.0.0.0:8000 -t public public/router.php"
nohup bash -c "while true; do $PHP_CMD 2>/tmp/php_server.log; sleep 0.5; done" >/dev/null 2>&1 &
echo "PHP PID: $!"
sleep 3

# Verify
if curl -s --max-time 5 http://127.0.0.1:8000/ > /dev/null 2>&1; then
    echo "Tenadam HMS running on :8000 (PHP-only mode)"
else
    echo "FAILED to start"
    exit 1
fi
