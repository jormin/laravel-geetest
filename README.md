极验验证码 v3.0 Laravel 扩展包

## 安装

 1. 安装包文件

	``` bash
	$ composer require jormin/laravel-geetest
	```

## 配置

1. 注册 ServiceProvider:
	
	```php
	Jormin\Geetest\GeetestServiceProvider::class,
	```

2. 添加 Alias

     ```php
     'Geetest' => Jormin\Geetest\Facades\Geetest::class,
     ```

3. 创建配置文件、视图级资源文件：

	```shell
	php artisan vendor:publish --provider='Jormin\Geetest\GeetestServiceProvider'
	```
	
4. `.env` 文件增加配置项 `GEETEST_ID` 和 `GEETEST_KEY`

## 配置项

| 配置项  | 说明  | 选项  | 默认值  |
| ------------ | ------------ | ------------ | ------------ |
| width | 按钮宽度  | 单位可以是 px, %, em, rem, pt  | 300px|
| lang | 语言，极验验证码免费版不支持多国语言  | zh-cn, en, zh-tw, ja, ko, th  | zh-cn  |
| product  | 验证码展示方式  | popup, float  | popup  |
| geetest_id  | 极验验证码ID  |   |   |
| geetest_key  | 极验验证码KEY  |   |   |
| client_fail_alert  | 客户端失败提示语  |   | 请完成验证码  |
| server_fail_alert  | 服务端失败提示语  |   | 验证码校验失败  |

## 使用

1. 前端使用

安装扩展后，在页面需要使用极验验证码的地方增加如下代码

```php
{!! Geetest::render() !!}
```

2. 服务端校验

在服务端使用 `geetest` 验证规则进行二次验证，示例代码：

```php
$this->validate($request, [
    'geetest_challenge' => 'required|geetest',
    'geetest_validate' => 'required|geetest',
    'geetest_seccode' => 'required|geetest',
], [
    'geetest' => config('laravel-geetest.server_fail_alert')
]);
```

## 参考图

![](https://qiniu.blog.lerzen.com/c7086810-2a14-11e7-a419-ed2a045e33b4.jpg)

## 参考项目

1. [Germey/LaravelGeetest](https://github.com/Germey/LaravelGeetest)

2. [GeeTeam/gt3-php-sdk](https://github.com/GeeTeam/gt3-php-sdk)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
