FROM php:8.1-cli

# نسخ كل ملفات المشروع
COPY . /var/www/html

# مجلد العمل
WORKDIR /var/www/html

# تعيين منفذ افتراضي في حال لم تحدده البيئة
ENV PORT=8080

# تشغيل السيرفر باستخدام المتغير PORT
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} index.php"]
