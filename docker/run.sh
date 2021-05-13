#!/usr/bin/env bash

# Remove previous remote hosts for xdebug
    sed -i '/xdebug.client_host=.*$/d' /etc/php/8.0/cli/php.ini
    sed -i '/xdebug.client_host=.*$/d' /etc/php/8.0/apache2/php.ini
    # Put current remote host for xdebug
    echo "xdebug.client_host=host.docker.internal" >> /etc/php/8.0/cli/php.ini
    echo "xdebug.client_host=host.docker.internal" >> /etc/php/8.0/apache2/php.ini
/usr/sbin/apache2ctl -D FOREGROUND
