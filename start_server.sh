#!/bin/bash
export PATH="/home/z/.local/bin:$PATH"
export LD_LIBRARY_PATH="/home/z/.local/php/usr/lib/x86_64-linux-gnu:$LD_LIBRARY_PATH"
export PHPRC="/home/z/my-project/hms/php.ini"
cd /home/z/my-project/hms

# Don't start if already running
if pgrep -f "php.*127.0.0.1:3000" > /dev/null 2>&1; then
    exit 0
fi

php -S 127.0.0.1:3000 server.php >> /tmp/hms_server.log 2>&1 &
echo "Started PHP server on port 3000, PID: $!"
