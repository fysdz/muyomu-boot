FROM muyomu/boot:4.0.7

COPY . /var/www/html/

EXPOSE 80

VOLUME ["/var/log/muyomu/"]

ENTRYPOINT ["/boot.sh"]

WORKDIR /home