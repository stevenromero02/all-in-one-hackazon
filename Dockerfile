FROM ubuntu:14.04
RUN apt-get update
RUN apt-get -y upgrade
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mysql-client mysql-server apache2 libapache2-mod-php5 pwgen python-setuptools vim-tiny php5-mysql  php5-ldap unzip

# setup hackazon
RUN easy_install supervisor
ADD ./scripts/start.sh /start.sh
ADD ./scripts/xss_configuration.sh /xss_configuration.sh
ADD ./vulnerabilities/xss_VULNERABILITIES.md /vulnerabilities/xss_VULNERABILITIES.md
ADD ./vulnerabilities/xss_accountv1.php /vulnerabilities/xss_accountv1.php
ADD ./vulnerabilities/xss_accountv2.php /vulnerabilities/xss_accountv2.php
ADD ./vulnerabilities/xss_accountv3.php /vulnerabilities/xss_accountv3.php
ADD ./vulnerabilities/xss_accountv4.php /vulnerabilities/xss_accountv4.php
ADD ./vulnerabilities/xss_accountv5.php /vulnerabilities/xss_accountv5.php
ADD ./vulnerabilities/xss_amfv1.php /vulnerabilities/xss_amfv1.php
ADD ./vulnerabilities/xss_amfv2.php	/vulnerabilities/xss_amfv2.php
ADD ./vulnerabilities/xss_cartv1.php /vulnerabilities/xss_cartv1.php
ADD ./vulnerabilities/xss_cartv2.php /vulnerabilities/xss_cartv2.php
ADD ./vulnerabilities/xss_cartv3.php /vulnerabilities/xss_cartv3.php
ADD ./vulnerabilities/xss_checkoutv1.php /vulnerabilities/xss_checkoutv1.php
ADD ./vulnerabilities/xss_checkoutv2.php /vulnerabilities/xss_checkoutv2.php
ADD ./vulnerabilities/xss_checkoutv3.php /vulnerabilities/xss_checkoutv3.php
ADD ./vulnerabilities/xss_checkoutv4.php /vulnerabilities/xss_checkoutv4.php
ADD ./vulnerabilities/xss_contactv1.php /vulnerabilities/xss_contactv1.php
ADD ./vulnerabilities/xss_contactv2.php	/vulnerabilities/xss_contactv2.php
ADD ./vulnerabilities/xss_contactv3.php	/vulnerabilities/xss_contactv3.php
ADD ./vulnerabilities/xss_contactv4.php /vulnerabilities/xss_contactv4.php
ADD ./vulnerabilities/xss_faqv1.php	/vulnerabilities/xss_faqv1.php
ADD ./vulnerabilities/xss_faqv2.php	/vulnerabilities/xss_faqv2.php
ADD ./vulnerabilities/xss_faqv3.php	/vulnerabilities/xss_faqv3.php
ADD ./vulnerabilities/xss_searchv1.php /vulnerabilities/xss_searchv1.php
ADD ./vulnerabilities/xss_searchv2.php /vulnerabilities/xss_searchv2.php
ADD ./vulnerabilities/xss_userv1.php /vulnerabilities/xss_userv1.php
ADD ./vulnerabilities/xss_userv2.php /vulnerabilities/xss_userv2.php
ADD ./vulnerabilities/xss_userv3.php /vulnerabilities/xss_userv3.php
ADD ./vulnerabilities/xss_wishlistv1.php /vulnerabilities/xss_wishlistv1.php
ADD ./vulnerabilities/xss_wishlistv2.php /vulnerabilities/xss_wishlistv2.php
ADD ./vulnerabilities/xss_wishlistv3.php /vulnerabilities/xss_wishlistv3.php
ADD ./scripts/restart_services.sh /restart_services.sh
ADD ./scripts/passwordHash.php /passwordHash.php
ADD ./scripts/foreground.sh /etc/apache2/foreground.sh
ADD ./configs/supervisord.conf /etc/supervisord.conf
ADD ./configs/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN rm -rf /var/www/
ADD https://github.com/rapid7/hackazon/archive/master.zip /hackazon-master.zip
RUN unzip /hackazon-master.zip -d hackazon
RUN mkdir /var/www/
RUN mv /hackazon/hackazon-master/ /var/www/hackazon
RUN cp /var/www/hackazon/assets/config/db.sample.php /var/www/hackazon/assets/config/db.php
RUN cp /var/www/hackazon/assets/config/email.sample.php /var/www/hackazon/assets/config/email.php
ADD ./configs/parameters.php /var/www/hackazon/assets/config/parameters.php
ADD ./configs/rest.php /var/www/hackazon/assets/config/rest.php
ADD ./configs/createdb.sql /var/www/hackazon/database/createdb.sql
RUN chown -R www-data:www-data /var/www/
RUN chown -R www-data:www-data /var/www/hackazon/web/products_pictures/
RUN chown -R www-data:www-data /var/www/hackazon/web/upload
RUN chown -R www-data:www-data /var/www/hackazon/assets/config
RUN chmod 755 /start.sh
RUN chmod 755 /xss_configuration.sh
RUN chmod 755 /restart_services.sh
RUN chmod 755 /etc/apache2/foreground.sh
RUN cp /xss_configuration.sh /home/ubuntu/xss_configuration.sh
RUN a2enmod rewrite 
RUN mkdir /var/log/supervisor/

EXPOSE 80 443
CMD ["/bin/bash", "/start.sh"]
