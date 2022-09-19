<?php

namespace Cth\WangEditor5;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class WangEditor5ServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(WangEditor5 $extension)
    {
        if (!WangEditor5::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'wangeditor5');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext')],
                'wangeditor5'
            );
        }

        Admin::booting(function () {
            Form::extend('wangEditor5', Editor::class);
        });
    }
}