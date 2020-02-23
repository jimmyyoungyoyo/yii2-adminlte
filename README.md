# Introduction
This is a template based on adminLTE3 for Yii2。
這是給Yii2使用adminLTE3的樣板。

# Install 
```
    composer require "jimmyyoungyoyo/yii2-adminlte"
```
# Usage
1. add to config
```php
    // file path config/web.php 
    // add this in components
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/jimmyyoung/yii-adminlte/src'
             ],
         ],
    ],
```

2. use Menu Widget
```php
    use jimmyyoungyoyo\adminlte\component\MenuGenerate;

    <?= MenuGenerate::widget([
        'menu' => [
            ['label' => 'Account', 'icon' => 'fa fa-users', 'url' => '/account/index', 'active' => true],
            ['label' => 'Message', 'icon' => 'fa fa-paper-plane', 'url' => '/message/index', 'active' => false],
            [
            'label' => 'Dashboard',
            'icon' => 'fa fa-tachometer-alt',
            'url' => '#',
            'active' => false,
            'items' => [
                [
                'label' => 'example1',
                'icon' => 'fa fa-users',
                'url' => '/dashboard/example1',
                'active' => false,
                ],
                [
                'label' => 'example2',
                'icon' => 'fa fa-users',
                'url' => '/dashboard/example2',
                'active' => false,
                ],
                [
                'label' => 'example3',
                'icon' => 'fa fa-users',
                'url' => '/dashboard/example3',
                'active' => false,
                ]
            ]
            ],
        ]])
    ?>
```

# License
MIT

# Other
Please tell me if this project have any problem。

如果這個專案有任何問題，請告訴我，感謝
