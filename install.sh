#!/bin/bash
SCRIPT_DIR=$(dirname -- "$( readlink -f -- "$0"; )");
sudo ln -s $SCRIPT_DIR/autocorrect.sh /usr/bin/autocorrect
