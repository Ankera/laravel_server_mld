### 多米乐Laravel学习

##### 学习地址
```text 
16
https://learnku.com/docs/laravel/8.x

https://www.bilibili.com/video/BV1xL411W7DE?p=1&vd_source=0b9abcde1e0c06aa453d51487fc56291
```

##### php8 别名安装项目
```text
php8 -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php8 composer-setup.php
php8 -r "unlink('composer-setup.php');"
php8 composer.phar create-project --prefer-dist laravel/laravel laravel_sever_mld
```

##### 源码写在别的目录
```text
目的是迁移项目不动 Laravel 基本框架， 只迁移 Modules 文件夹

composer require nwidart/laravel-modules
 
php8 artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"

composer dump-autoload

```

##### 模块化创建校验规则
```text
php8 artisan modul:make-request TestRequest Admin
```
