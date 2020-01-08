# How to Deploy Project to Live Server

## Prepare your dedicated server for project
1. **Create/purchase your dedicated server**. In case of Digital Ocean it’s called Droplet, Amazon AWS call it EC2 instance etc.
2. **Install LEMP or LAMP stack**. LAMP/LEMP stands for Linux (comes with server), web-server (Nginx for “E” and Apache for “A”), MySQL database and PHP. 
3. **Configure SSH access for yourself**. You will probably deploy changes by SSHing to the machine and running commands like git pull, php artisan migrate etc. 
4. **PHP and Dependencies for Laravel**. The website has a few system requirements, you will need to make sure your server meets the following requirements:
    - PHP >= 7.2.0
    If you are using Apache as your web server to install PHP and Apache PHP module run the following command:
        ```sudo apt install php libapache2-mod-php```
    Once the packages are installed restart the Apache service:
        `sudo systemctl restart apache2`  
    Unlike Apache, Nginx doesn't have a built in support for processing PHP files so we need to install a separate application such as PHP FPM (“fastCGI process manager”) which will handle PHP files.
    
    To install the PHP and PHP FPM packages run the following command:
        `sudo apt install php7.3-fpm`
    Once the packages are installed you can check the status of the PHP FPM service with:
        `systemctl status php7.3-fpm`
    You can now edit the Nginx server block and add the following lines so that Nginx can process PHP files:
        ```
            server {
            
                # . . . other code
            
                location ~ \.php$ {
                    include snippets/fastcgi-php.conf;
                    fastcgi_pass unix:/run/php/php7.3-fpm.sock;
                }
            }
        ```
    Do not forget to restart the Nginx service so that the new configuration take effect:
        `sudo systemctl restart nginx`
    Installing PHP 7.3 Extensions
        Install all php extensions in one command
            `sudo apt install php7.3-cli php7.3-fpm php7.3-json php7.3-pdo php7.3-mysql php7.3-zip php7.3-gd  php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath php7.3-json`
        Install Individual Extension
        - BCMath PHP Extension
            `sudo apt-get install php7.3-bcmath`
        - Ctype PHP Extension
            `sudo apt-get install php7.3-ctype`
        - JSON PHP Extension
            `sudo apt-get install php7.3-json`
        - Mbstring PHP Extension
            `sudo apt-get install php7.3-mbstring`
        - OpenSSL PHP Extension
            `sudo apt-get install openssl`
        - PDO PHP Extension
            `sudo apt-get install php7.3-pdo`
        - Tokenizer PHP Extension
            `sudo apt-get install php7.3-bcmath`
        - XML PHP Extension
            `sudo apt-get install php7.3-xml`
            
5. **Install/configure composer**
Install PHP CLI and Zip:
    `sudo apt update && sudo apt install wget php-cli php-zip unzip curl`
Download Composer with curl:
    `curl -sS https://getcomposer.org/installer |php`
Move the Composer file to /usr/local/bin directory:
    `sudo mv composer.phar /usr/local/bin/composer`
6. **Install/configure git**
    `sudo apt-get install git`
7. **Configure MySQL**
    `sudo apt-get install mysql`
8. **Configure Web-server** Prepare a specific folder for your website. Here’s an example Nginx config provided
```
server {
    listen 80;
    server_name example.com;
    root /example.com/public;
    
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";
    
    index index.html index.htm index.php;
    
    charset utf-8;
    
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    
    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }
    
    error_page 404 /index.php;
    
    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php/php7.1-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }
    
    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```
9. **Point the Domain to Server**. Your new server probably has some IP address given to you by Digital Ocean (or other provider), so now you need to go to the page of your domain configuration (where you’ve bought the domain) and change its DNS records, specifically A record to point to that new IP address.
`git clone https://github.com/davidpella/dignity.git {projectName}`

## Initial launch of the project
1. **Putting the code to the repository**.
2. **Cloning repository to the server**. We need to SSH into our server, navigate to the folder prepared for the project, and launch git clone command.
3. **.env file**. 
- Create new .env file under root directory of the project by using the following command: 
    `touch .env`
- The open .env file then paste the following code to it.
    ```
        APP_NAME=MyDignity
        APP_ENV=production
        APP_KEY=base64:lE2vr5MHhf9H3uLlOutgw3ZOjyrdsdOVgGw9LGshq10=
        APP_DEBUG=false
        APP_URL=http://mydignity.co.tz
        
        LOG_CHANNEL=stack
        
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
        
        BROADCAST_DRIVER=log
        CACHE_DRIVER=file
        QUEUE_CONNECTION=sync
        SESSION_DRIVER=file
        SESSION_LIFETIME=120
        
        REDIS_HOST=127.0.0.1
        REDIS_PASSWORD=null
        REDIS_PORT=6379
        
        MAIL_DRIVER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null
        
        AWS_ACCESS_KEY_ID=
        AWS_SECRET_ACCESS_KEY=
        AWS_DEFAULT_REGION=us-east-1
        AWS_BUCKET=
        
        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_APP_CLUSTER=mt1
        
        MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
        MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

    ```
  
4. **Writeable folders**. After installing project, you may need to configure some permissions. Directories within the storage and the bootstrap/cache directories should be writable by your web server or Laravel will not run. 
    `chmod -R 755 storage`
    `chmod -R 755 bootstrap/cache`
5. **Composer install**. Let’s run this “magic” command.
    `composer install`
6. **Generate application key**. We need to run this command
    `php artisan key:generate`




