<?php

namespace Cth\WangEditor5;

use Encore\Admin\Extension;

class WangEditor5 extends Extension
{
    public $name = 'wangeditor5';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Wangeditor5',
        'path'  => 'wangeditor5',
        'icon'  => 'fa-gears',
    ];
}