#!/bin/bash

service mysql status | grep 'active (running)' > /dev/null 2>&1

if [ $? != 0 ]
then
		sudo service apparmor stop > /dev/null
		sudo service apparmor teardown > /dev/null
        sudo service mysql restart > /dev/null
fi

service apache2 status | grep 'active (running)' > /dev/null 2>&1

if [ $? != 0 ]
then
        sudo service apache2 restart > /dev/null
fi
