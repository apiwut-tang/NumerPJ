FROM node:alpine

WORKDIR /usr/appa

COPY ./package.json ./

RUN npm install

COPY . .

#สร้างที่เก็บ Static File ไว้ในโฟลเดอร์ build
RUN npm run build

CMD ["npm","start"]


