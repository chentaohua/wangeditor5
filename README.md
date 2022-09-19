# wangEditor5 extension for laravel-admin


## Installation

```bash
composer require chentaohua/wangeditor5

php artisan vendor:publish --provider=Cth\WangEditor5\WangEditor5ServiceProvider
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add some configuration that belongs to this extension.
```php
'extensions' => [

        // document : https://www.wangeditor.com/v5/
        'wangeditor5' => [
            // If the value is set to false, this extension will be disabled
            'enable' => true,
            'height' => '300px',

            'editor_config' => ['placeholder' => '请输入内容 ...'],
            'editor_mode' => 'simple', // or 'default'

            'toolbar_config' => [

            ],
            'toolbar_mode' => 'simple', // or 'default'
        ]
    ],
```

The configuration of the editor can be found in [wangEditor5 Documentation](https://www.wangeditor.com/v5/).

## Usage

Use it in the form form:
```php
$form->wangEditor5('content');
```



License
------------
Licensed under [The MIT License (MIT)](LICENSE).
