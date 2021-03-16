<?php

namespace Encore\PHPInfo;
use Encore\Admin\Admin;
use Illuminate\Support\ServiceProvider;

class PHPInfoServiceProvider extends ServiceProvider
{

    public function handle(PHPInfo $extension)
    {
        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'phpinfo');
        }
        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/phpinfo')],
                'phpinfo'
            );
        }
        Admin::booting(function () {
            Admin::js('vendor/laravel-admin-ext/phpinfo/foo.js');
            Admin::css('vendor/laravel-admin-ext/phpinfo/bar.css');
        });
    }
    /**
     * {@inheritdoc}
     */
    public function boot(PHPInfo $extension)
    {
        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'phpinfo');
        }

        if (! PHPInfo::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'phpinfo');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/phpinfo')],
                'phpinfo'
            );
        }

        $this->app->booted(function () {
            PHPInfo::routes(__DIR__.'/../routes/web.php');
        });
    }
}
