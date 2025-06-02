FROM php:8.1-apache

# Evita prompts interactivos de tzdata
ENV DEBIAN_FRONTEND=noninteractive

# Instala tzdata y configura la zona horaria
RUN apt-get update && \
    apt-get install -y tzdata && \
    ln -fs /usr/share/zoneinfo/America/Mexico_City /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata
