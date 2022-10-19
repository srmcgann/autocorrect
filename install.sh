#!/bin/bash
SCRIPT_DIR=$(dirname -- "$( readlink -f -- "$0"; )");
sudo ln -s $SCRIPT_DIR/autosyntax.sh /usr/bin/autosyntax
