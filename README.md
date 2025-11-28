環境構築

Dockerビルド　　・git@github.com:sumeragi49/contact-test.git　　　・docker-compose up -d --build

Laravel環境構築　　　・docker-compose exec php bash　　　・composer install
　　　　　　　　　　　・cp .env.example.env　　　・php artisan key:generate
           　　　　　・php artisan db:seed

開発環境　　　・お問い合わせ画面：http://localhost
　　　　　　　・ユーザー登録：http://localhost/register
       　　　・ユーザーログイン：http://localhost/login
          　 ・管理画面：http://localhost/admin
             ・phpMyAdmin：http://localhost:8080/

使用技術   ・php8.1-fpm　・laravel　・jquery　・MySQL8.0.26　・nginx:1.21.1

ER図
