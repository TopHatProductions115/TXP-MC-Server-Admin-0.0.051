#!/bin/bash

MCSERVER="minecraft_server"
SCREENNAME="minecraft"

echo "Saving the World..."
screen -S $SCREENNAME -p 0 -X stuff "`printf "save-all.\r"`";
sleep 60

echo "Stopping the Minecraft Server..."
screen -S $SCREENNAME -p 0 -X stuff "`printf "stop.\r"`";
sleep 5