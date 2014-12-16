#!/bin/bash

MCSERVER="minecraft_server"
SCREENNAME="minecraft"

echo "Launching the Minecraft Server..."
screen -m -d -S $SCREENNAME minecraft_server nogui;
screen -S $SCREENNAME -p 0 -X stuff "`printf "save-on.\r"`";
sleep 1
fi