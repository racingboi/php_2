# php_2

\*\*\* Sau khi Pull code mới về

1. Mở VS Code, phpMyAdmin

2. Tạo một database tên là it-device ở Phpmyadmin

3. Mở terminal(Bấm chuột phải vào thư mục dự án [ php_2 ] -> Open in Integrated Terminal) chạy lệnh theo thứ tự:
   - cp .env.example .env
   - npm i (cài sẵn nodejs và npm) -> cài các file node_modules
   - composer install (cài sẵn composer) -> cài các thư viện laravel
   - php artisan migrate -> tạo database( phải tạo trước database php_2 trong phpMyAdmin)
4. Chạy lệnh: php artisan key:generate

5. Khởi chạy dự án( mở 2 terminal chạy cùng lúc 2 lệnh dưới)
   - npm run dev de chay css
   - php artisan serve de chay du an
6. Vào URL: 127.0.0.1:8000 -> tạo tài khoản mới, vào link Administrator

\*\*\* List còn lại của admin page

1. Handle Category
2. Dashboard
3. Order
4. Website
