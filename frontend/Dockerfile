FROM node:lts-alpine AS node

RUN npm install -g @angular/cli

WORKDIR /usr/src

CMD ["ng","serve","--host", "0.0.0.0"]