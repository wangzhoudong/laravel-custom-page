<?php
/**
 *------------------------------------------------------
    laravel-dict是一个用于管理系统常用的变量的简单封装.提高代码的扩展性，可以易读性
 *------------------------------------------------------
 *
 * @author    wangzhoudong@foxmail.com
 * @date      2017/05/25 07:34
 * @version   V1.0
 *
 */

namespace Wangzd\Page;


use Wangzd\Page\Contracts\PageInterface;
use Wangzd\Page\Models\CustomPageModel;
class Page implements PageInterface{

    public function getPage($page)
    {
        // TODO: Implement getPage() method.
    }

    public function setPage($platform, $page, $content)
    {
        // TODO: Implement setPage() method.
    }


}
