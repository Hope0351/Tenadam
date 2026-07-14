#!/bin/bash
cd /home/z/my-project/hms

# Kill existing PHP on port 8000
kill $(lsof -t -i:8000 2>/dev/null) 2>/dev/null
sleep 1

# Start PHP with keepalive
(
  while true; do
    /home/z/.local/php/bin/php -c /home/z/.local/php/php.ini -S 0.0.0.0:8000 -t public 2>/tmp/php_server.log
    sleep 1
  done
) &
disown

# Wait for ready
for i in $(seq 1 15); do
  if curl -s --max-time 2 http://127.0.0.1:8000/login > /dev/null 2>&1; then
    echo "Tenadam HMS running on port 8000"
    exit 0
  fi
  sleep 1
done
echo "Failed to start HMS"
exit 1
