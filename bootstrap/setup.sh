#!/bin/bash
echo "Lets go - "
cp social-media-playbook /etc/apache2/sites-available/
a2ensite social-media-playbook
echo "moved vhost files"
echo "db needs setting up, including user creds"
read
