#!/bin/bash

MCSERVER="minecraft_server"
SCREENNAME="minecraft"

echo "Saving the World..."
screen -S $SCREENNAME -p 0 -X stuff "`printf "save-all.\r"`";
sleep 30

echo "Debugging..."
screen -S $SCREENNAME -p 0 -X stuff "`printf "debug.\r"`";
sleep 5