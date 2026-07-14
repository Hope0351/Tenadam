#!/bin/bash
# Ultra-reliable PHP server for Tenadam HMS
cd /home/z/my-project/hms

PHP_BIN="/home/z/.local/php/bin/php"
PHP_INI="/home/z/.local/php/php.ini"
PORT=8000
LOG="/tmp/php_server.log"

# Clear old log
> "$LOG"

while true; do
    echo "[$(date '+%H:%M:%S')] Starting PHP server on 0.0.0.0:$PORT..." >> "$LOG"
    $PHP_BIN -c "$PHP_INI" -S "0.0.0.0:$PORT" server.php >> "$LOG" 2>&1
    EXIT=$?
    echo "[$(date '+%H:%M:%S')] PHP exited ($EXIT), restarting in 0.5s..." >> "$LOG"
    sleep 0.5
done