FROM node

WORKDIR /var/www

RUN npm install --save laravel-echo
RUN npm install --save socket.io-client

RUN npm i -g laravel-echo-server

CMD ["laravel-echo-server", "start"]
