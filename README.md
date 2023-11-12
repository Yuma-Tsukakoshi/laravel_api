# Laravel インストール方法
1. `docker compose build --no-cache` (ビルドする)
2. `docker compose up -d` (コンテナをたてる)
3. `docker compose exec app sh` (appコンテナに入る)
4. `composer create-project --prefer-dist laravel/laravel . "10.*"` (src配下にLaravel10をインストール)
5. ブラウザで `http://localhost` にアクセスし、Laravelのロゴ入りのトップページが表示されることを確認

<img width="1446" alt="スクリーンショット 2023-06-09 19 39 34" src="https://github.com/posse-ap/template-ph3-website/assets/33271639/69d42fe3-4e3a-4087-91a9-c55640a2671f">

## データ初期化

### db接続方法
1.
```bash
docker compose exec -it db /bin/bash
```
2.
```bash
mysql -u root -p
```
3.
```bash
root
```
### データを初期化してinit.sql起動する場合
```bash
mysql -u root -p < docker-entrypoint-initdb.d/init.sql
```
が実行され初期データが投入されます
