#!/bin/bash

rm -rf var/cache/* var/log/*
chown ubuntu:ubuntu *
chown www-data:ubuntu var/*
composer install
