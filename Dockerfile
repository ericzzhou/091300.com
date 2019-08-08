FROM php:7.2-apache
MAINTAINER Eric Zhou <eric.zhou@yamibuy.com>

ENV APACHE_DOCUMENT_ROOT /var/www/html/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

#启用伪静态
RUN a2enmod rewrite


RUN apt-get update \
    # 相关依赖必须手动安装
    && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev
    
# 安装 ipcache gd 图库
RUN docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache gd
# Copy configuration
COPY ./Docker/php/ext/opcache.ini $PHP_INI_DIR/conf.d/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# COPY Docker/apache/000-default.conf /etc/apache2/sites-enabled/

WORKDIR /var/www/html/
COPY . /var/www/html/

RUN chown www-data:www-data /var/www/html/ -R
RUN chmod +x tasks/docker-compile.sh

# USER www-data:www-data

# 对其他容器开放端口
# EXPOSE 8123/tcp




# build docker 镜像
# docker build -t yamibuy-ec-mobilesite:v7 .

# 启动 docker 镜像
#  docker run -d -p 8080:8080 --name ec-mobilesite-v7 yamibuy-ec-mobilesite:v7

# 使用数据卷映射方式调试代码
# docker run --rm -d -p 9000:9000/tcp    -v D:\workspace\YAMIBUY\ec\wwwsite\ec-mobilesite:/var/www/myapp/   ec-mobilesite:latest
