<?php
/**
 * User: Wangzd
 * Time: 上午10:32
 */

namespace Wangzd\Page\Facades;

use Illuminate\Support\Facades\Facade;
use Wangzd\Page\Contracts\PageInterface;

class Page extends Facade {
    /**
     *
     * Get the registered name of the component.
     *
     * @return string
     *
     */
    protected static function getFacadeAccessor()
    {
//        return 'Receivable';
        return PageInterface::class;
    }
}
