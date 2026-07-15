#!/bin/bash
export PATH="/home/z/.local/bin:$PATH"
export LD_LIBRARY_PATH="/home/z/.local/php/usr/lib/x86_64-linux-gnu:$LD_LIBRARY_PATH"
export PHPRC="/home/z/my-project/hms/php.ini"

cd /home/z/my-project/hms

while true; do
    php -S 0.0.0.0:8000 -t public >> /tmp/hms_server.log 2>&1
    echo "Server crashed, restarting in 2s..." >> /tmp/hms_server.log
    sleep 2
done
