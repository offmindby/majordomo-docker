FROM collin24/ubuntu-lamp-phpmyadmin
MAINTAINER Aleksey Krisenkov <krisenkov@gmail.com>
LABEL version="0.0.1"
ADD html/ /var/www/html
ADD ./db_terminal.sql /tmp/
ADD ./apache2.conf /etc/apache2/
RUN apt-get -y install mc
RUN rm /var/www/html/index.html
RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load