#! /usr/bin/env bash

CC_PRE_BUILD_HOOK=chmod +x clevercloud/listS3OneLine.sh

source /home/bas/applicationrc

/usr/bin/php $APP_HOME/listS3OneLine.php

echo "okay bash"
