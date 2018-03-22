## 自定义编辑
laravel-custom-page是一个用于管理你需要给普通用户可以编辑的页面内容
## 使用

## 安装

使用
`composer require "wangzd/laravel-custom-page:*"`

## 配置

### Laravel应用
1. 注册 `ServiceProvider`:
```php
Wangzd\Page\PageServiceProvider::class,
```
```

2. 创建配置和迁移文件
```shell
php artisan vendor:publish
```

4. 执行迁移命令,生成数据表
```shell
php artisan migrate
```

5.添加门面到`config/app.php`中的`aliases`部分:
```php
'Page' => Wangzd\Page\Facades\Dict::class
```

## License

MIT
