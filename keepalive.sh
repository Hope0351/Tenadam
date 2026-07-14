#!/bin/bash
export PATH="/home/z/.local/bin:$PATH"
export LD_LIBRARY_PATH="/home/z/.local/php/usr/lib/x86_64-linux-gnu:$LD_LIBRARY_PATH"
export PHPRC="/home/z/my-project/hms/php.ini"
cd /home/z/my-project/hms

echo "Keeper starting at $(date)" >> /tmp/hms_keeper.log

while true; do
    echo "Starting PHP server at $(date)" >> /tmp/hms_keeper.log
    php -S 0.0.0.0:8000 server.php >> /tmp/hms_server.log 2>&1
    EXIT_CODE=$?
    echo "PHP server exited with code $EXIT_CODE at $(date)" >> /tmp/hms_keeper.log
    sleep 0.5
done
