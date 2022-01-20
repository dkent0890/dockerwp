FROM php:7.4-apache

RUN mkdir /var/www/wordpress; \
    chown -R $USER:$USER /var/www/wordpress

COPY wordpress.conf /etc/apache2/sistes-available/wordpress.conf

RUN a2ensite wordpress.conf; \
    a2enmod rewrite; \ 
    service apache2 restart

# wordpress 5.8.3
RUN     cd /tmp; \
	curl -o wordpress.tar.gz -fL "https://wordpress.org/wordpress-5.8.3.tar.gz"; \
	tar -xzf wordpress.tar.gz -C /tmp/; \
        touch /tmp/wordpress/.htaccess; \
        cp /tmp/wordpress/wp-config-sample.php /tmp/wordpress/wp-config.php; \
        mkdir /tmp/wordpress/wp-content/upgrade; \
        cp -a /tmp/wordpress/. /var/www/wordpress; \
        rm -r /tmp/wordpress; \
        chown -R www-data:www-data /var/www/wordpress; \
        chmod -R 755 /var/www/wordpress
      
COPY    --chown=www-data:www-data wp-config.php /var/www/wordpress/wp-config.php




