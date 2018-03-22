<?php

namespace Wangzd\Page;

use Illuminate\Support\ServiceProvider;
use Wangzd\Page\Contracts\PageInterface;


class PageServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者是否延迟加载
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
                //迁移文件
                __DIR__.'/Migrations/0000_00_00_000000_create_custom_page_table.php' => database_path(
                    'migrations/0000_00_00_000000_create_custom_page_table.php'
                ),
            ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(PageInterface::class, Page::class);
    }

    /**
     * 获取由提供者提供的服务.
     * @return array
     */
    public function provides()
    {
        return [PageInterface::class];
    }
}
