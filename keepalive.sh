#!/bin/bash
cd /home/z/my-project/hms
while true; do
  /home/z/.local/php/bin/php -n -c /home/z/.local/php/php.ini -S 127.0.0.1:8001 -t public 2>/tmp/php_server.log
  sleep 0.3
done
