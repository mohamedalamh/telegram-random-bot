FROM php:8.1-cli

# نسخ كل ملفات المشروع داخل الحاوية
COPY . /var/www/html

# جعل مجلد العمل هو مجلد المشروع
WORKDIR /var/www/html

# تشغيل السيرفر الداخلي لـ PHP على المنفذ 80
CMD ["php", "-S", "0.0.0.0:80", "index.php"]
