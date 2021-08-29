# Samazon-Laravel

Amazon風ECサイト
カート機能や商品の追加、カテゴリなどでのソート（並び替え）、決済機能など実装しています

## Dependency
- PHP 7.2.24
- Laravel Framework 5.8.38
- DB Sqlite3(開発環境のみ)
- AWS S3

## SetUp
AWS IAM ユーザ作成
AWS IAMのポリシーにAmazonS3FullAccessを追加
.env作成して下記設定を実施
```
AWS_ACCESS_KEY_ID=<IAMのキー>
AWS_SECRET_ACCESS_KEY=<IAMのアクセスキー>
AWS_DEFAULT_REGION=<作成したバケットのリージョン ※デフォルトなら us-west-2>
AWS_BUCKET=<作成したバケット名>
```
下記のコマンドを実行
```
sqlite3 database/databese.sqlite
sqlite> .tables
sqlite> .exit
composer install
php artisan migrate
php artisan serve --port=8080
```
