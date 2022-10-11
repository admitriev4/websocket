FROM node:alpine

WORKDIR /var/www/html

COPY package.json ./

RUN npm install --save laravel-echo
RUN npm install --save socket.io-client
RUN npm i -g laravel-echo-server

CMD ["npm", "start"]
CMD ["laravel-echo-server", "start", "--force"]

