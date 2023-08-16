# Azatti php challenge

## description

## stack
- Windows 10
- xamp 8.2.4

## activate image processing in php.ini for ImageCreate function
;extension=gd to extension=gd (without ;)

## to install (go to C:/xamp/htdocs dir)

```git
git clone https://github.com/GokoshiJr/azatti-challenge-php.git
```

```bash
cd azatti-challenge-php
```

## create and fill .env file (add APP_API key for api token request and FILESYSTEM_DRIVER)

```bash
touch .env
```

- APP_API= YOUR_API_TOKEN
- FILESYSTEM_DRIVER=public
- ...another laravel key=values (see .env.example file)

## create storage link to serving pictures

```bash
php artisan storage:link
```

## run the program

```bash
php artisan serve
```

## Resources

- *[phpqrcode](https://phpqrcode.sourceforge.net/examples/index.php).*
- *[laravel](https://laravel.com/).*
- *[Guzzle](https://docs.guzzlephp.org/en/latest/overview.html).*
