#!/bin/bash
# HMS Keepalive Server
# Starts PHP dev server and auto-restarts on crash

HMS_DIR="/home/z/my-project/hms"
PHP="/home/z/.local/php/bin/php"
PHP_INI="/home/z/.local/php/php.ini"
PORT=8000

# Kill any existing process on our port
kill $(lsof -t -i:$PORT 2>/dev/null) 2>/dev/null
sleep 1

echo "Starting HMS keepalive server on port $PORT..."

while true; do
  $PHP -c $PHP_INI -S 0.0.0.0:$PORT -t "$HMS_DIR/public" 2>/dev/null
  # If we get here, PHP died. Wait briefly and restart.
  sleep 1
done &
KEEP_PID=$!

echo "Keepalive PID: $KEEP_PID"

# Wait for server to be ready
for i in $(seq 1 30); do
  if curl -s -o /dev/null -w "%{http_code}" http://localhost:$PORT/login 2>/dev/null | grep -q "200"; then
    echo "Server is ready!"
    exit 0
  fi
  sleep 1
done

echo "Server failed to start"
kill $KEEP_PID 2>/dev/null
exit 1