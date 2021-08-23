#!/bin/bash

# Pull the latest master changes,
# install dependencies,
# **REFRESH THE ENTIRE DATABASE**,
# import the API data

printf "\033[0;31mThis will **FORCE REWRITE** your database with the latest data.\033[0m\n"
read -p "Are you sure? [yN]" -r

if [[ $REPLY =~ ^[Yy]$ ]]
then
	echo "Deploying..."
    git pull origin master && composer install --no-dev && php artisan migrate:refresh --force && php artisan import
else
	echo "Doing nothing"
fi
