#! /usr/bin/env bash

CC_POST_BUILD_HOOK=echo "it works!"

source /home/bas/applicationrc

/usr/bin/php $APP_HOME/listS3OneLine.php

echo "okay bash"
