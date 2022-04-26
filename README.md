# psr16

psr16实现

## 安装

``` cmd
composer require diggphp/psr16
```

## 用例

``` php
$cache = new \DiggPHP\Psr16\NullAdapter;
$cache = new \DiggPHP\Psr16\LocalAdapter('./cache');

$cache->...
```
