#!/bin/bash
cd /home/z/my-project/hms
export PATH="/home/z/.local/bin:$PATH"
export LD_LIBRARY_PATH="/home/z/.local/php/usr/lib/x86_64-linux-gnu:$LD_LIBRARY_PATH"
export PHPRC="/home/z/my-project/hms/php.ini"

while true; do
    php -S 0.0.0.0:8000 server.php >> /tmp/hms_server.log 2>&1
    echo "[$(date)] Server exited, restarting..." >> /tmp/hms_server.log
    sleep 0.5
done
