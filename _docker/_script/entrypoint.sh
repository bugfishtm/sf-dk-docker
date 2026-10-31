#!/bin/sh
#set -e

##
## Startup Text
##
echo "┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓"
echo "  Suitefish Docker Initialization"
echo "┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛"

##
## Your startup commands here
##
echo "[SFD] Initialization: Executing entry point."
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

##
## Timezone Update
##
echo "[SFD] Timezone: Updating Time Zone Locale to $sf_timezone."
if [ -n "$sf_timezone" ]; then
    ln -snf "/usr/share/zoneinfo/$sf_timezone" /etc/localtime
    echo "$sf_timezone" > /etc/timezone
fi
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

##
## Setup Permissions
##
echo "[SFD] Permissions: Setting Chmod to 0770 on: /var/www.";
chmod 0770 /var/www -R > /dev/null 2>&1
echo "[SFD] Permissions: Setting Owner to www-data on: /var/www.";
chown www-data:www-data /var/www -R > /dev/null 2>&1
echo "[SFD] Permissions: Setting Chmod to 0777 on: /opt/sf_log/*.";
chmod 0777 /opt/sf_log/ -R > /dev/null 2>&1
chmod 0777 /opt/sf_log -R > /dev/null 2>&1
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

##
## Starting Service Initializations
##
echo "-----------------------------------------------------------------";
echo "[SFD] Stop cron services to be started by supervisor.";
service cron stop > /dev/null 2>&1
echo "[SFD] Services: Stopping MySQL Service to be started by supervisor.";
service mariadb stop > /dev/null 2>&1
echo "[SFD] Services: Waiting 5 Seconds.";
sleep 5

##
## Execute the main CMD Dockerfile command passed to the container
##
echo "[SFD] Initialization: Finished Executing Entry Point."
echo "[SFD] Initialization: Starting Main Container Prompt.";
exec "$@"