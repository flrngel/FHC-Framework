FROM ubuntu:trusty
MAINTAINER flrngel <flrngel@gmail.com>

# Install base packages
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && \
    apt-get -yq install \
        curl \
        apache2 \
        libapache2-mod-php5 \
        php5-mysql \
        php5-gd \
        php5-curl \
        php-pear \
        php-apc && \
    rm -rf /var/lib/apt/lists/*
RUN sed -i "s/variables_order.*/variables_order = \"EGPCS\"/g" /etc/php5/apache2/php.ini
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add image configuration and scripts
ADD lib/docker/runscript /run.sh
RUN chmod 755 /*.sh

# Configure /app folder with sample app
RUN mkdir -p /app && rm -fr /var/www/html && ln -s /app /var/www/html
ADD . /app
WORKDIR /app

ADD lib/docker/apache.conf /etc/apache2/sites-enabled/fhc-default.conf
RUN a2enmod rewrite

EXPOSE 80
CMD ["/run.sh"]
