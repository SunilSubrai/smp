#!/bin/bash
echo "Lets go"
cp social-media-playbook /etc/apache2/sites-available/
a2ensite social-media-playbook
echo "moved vhost file"
echo "create DB"
mysql -u root -p"hello" < wordpress.sql

echo "done press any key to finish"
read 

