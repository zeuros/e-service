# Homee care

# Getting started

### For dev 

##### Backend
```bash
sudo apt install php7.4-cli composer php-xml php-mbstring -y
composer install
```bash
Fill ```.env``` file copying ``.env.example```
Set app key with ``php artisan key:generate```, it'll fill the .env file key
```
php artisan serve  --host 0.0.0.0:8000
```

##### Frontend server start

> For first time run: ```npm install``` into root & resources/frontend/angular folders. Then:
```bash
cd resources/frontend/angular
npm i
npm run build:prod
```
```bash
cd resources/frontend/angular
npm run start
```


### For prod

##### Build frontend code & styles (creates a blade view, styles & js code)
```bash
cd resources/frontend/angular
npm run build:prod
```
##### Serve app
```bash
TBD...
```
