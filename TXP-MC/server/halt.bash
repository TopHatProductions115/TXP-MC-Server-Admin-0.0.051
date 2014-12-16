#!/bin/bash

MCSERVER="minecraft_server"
SCREENNAME="minecraft"

echo "Halting the Minecraft Server..."
screen -S $SCREENNAME -p 0 -X stuff "`printf "stop.\r"`";
sleep 5