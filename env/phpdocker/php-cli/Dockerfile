FROM phpdockerio/php80-cli:latest
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN set -xe; \
    apt-get update \
    && apt get install pecl \
    && apt-get -y --no-install-recommends install php8.0-pgsql php8.0-xdebug php8.0-dev php-pear php8.0-bcmath \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*