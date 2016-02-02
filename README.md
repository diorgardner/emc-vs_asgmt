# emc-vs_asgmt
# File: README.md
#
# Author: Dior Gardner diorgardner@gmail.com
# version: 0.2
# 2016.02.02

required software
    git
    apache
    php

There are two methods of deployment:
    1. salt
    2. manual

1. To deploy using salt push the following salt recipies to the desired minion
    salt_formulas/git.sls
    salt_formulas/webserver.sls
    salt_formulas/emc-vs_asgmt.sls

2. To deploy manually run the following script.
    manual_deploy/emc-vs_asgmt_deploy.sh

To run the phpunit tests run the following from active git directory 
    php composer.phar install
    ./vendor/bin/phpunit tests
