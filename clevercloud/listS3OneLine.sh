#! /usr/bin/env bash

source /home/bas/applicationrc

/usr/bin/php $APP_HOME/listS3OneLine.php

bundle exec rake listS3OneLine.php

exec $PHP "$@"
