#! /usr/bin/env bash

source /home/bas/applicationrc

/usr/bin/php $APP_HOME/listS3OneLine.php

echo "Nombre d'argument "$#

bundle exec rake listS3OneLine.php
