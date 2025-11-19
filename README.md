環境構築

Dockerビルド
　・git@github.com:sumeragi49/contact-test.git
　・docker-compose up -d --build

Laravel環境構築
　・docker-compose exec php bash
  ・composer install
  ・cp .env.example .env, 
  ・php artisan key:generate
  ・php artisan migrate
  ・php artisan db:seed
  

