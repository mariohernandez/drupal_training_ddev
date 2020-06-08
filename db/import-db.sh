#!/bin/bash

# Use a table that should exist in your database.
if ! mysql -e 'SELECT * FROM node__field_hero;' db > /dev/null; then
  echo 'Importing the database'
  # Provide path to custom database.
  gzip -dc /var/www/html/db/d8_training.sql.gz | mysql db
fi
