# confirmation-test3
環境構築
1.git@github.com:matsumura4132/confirmation-test3.git
2.DockerDesktopアプリを立ち上げる
3.docker-compose up -d --build


Laravel環境構築
1. docker-compose exec php bash
2.composer install
3..envに以下の環境変数を追加
　DB_CONNECTION=mysql
　DB_HOST=mysql
　DB_PORT=3306
　DB_DATABASE=laravel_db
　DB_USERNAME=laravel_user
　DB_PASSWORD=laravel_pass
4.アプリケーションキーの作成
　php artisan key:generate
5.マイグレーションの実行
  php artisan migrate  
6.シーディングの実行
  php artisan db:seed

URL
 ・開発環境: http://localhost/
 ・phpMtAdmin: http://localhost:8080/