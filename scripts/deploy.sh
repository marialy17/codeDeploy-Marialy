#!/bin/bash

rm -rf /var/www/html/codeDeploy-Marialy

mv /home/admin/codedeploy-temp /var/www/html/codeDeploy-Marialy

chown -R www-data:www-data /var/www/html/codeDeploy-Marialy
chmod -R 755 /var/www/html/codeDeploy-Marialy

systemctl restart apache2