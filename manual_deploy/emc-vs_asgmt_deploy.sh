#!/bin/bash
#set -x

# File: emc-vs_asgmt_deploy.sh
#
# Author: Dior Gardner diorgardner@gmail.com
# version: 0.1
# 2016.02.02

copyFiles () {
    cp ${scriptDir}/index.php ${path}
    cp ${scriptDir}/app.php ${path}
}

scriptDir="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

read -p "Enter the path where you wish to deploy emc-vs_asgmt: " path

if [ -f "${path}" ]; then
    printf "${path} exists, checking to see if ${path} is empty\n"
else
    printf "${path} doesn't exists, creating ${path}\n"
    mkdir -p "${path}"
fi

if [ "$(ls -A $path)" ]; then
    read -p "${path} is not empty copy files into ${path} anyways? " overwrite
    case ${overwrite} in
    [yY][eE][sS]|[yY])
        copyFiles
        ;;
    [nN][oO]|[nN])
        printf "Exiting deployment\n"
        exit
        ;;
    *)
        printf "Invalid input\n"
    esac	
else
    printf "${path} is empty deploying emc-vs_asgmt\n"
    copyFiles
fi
