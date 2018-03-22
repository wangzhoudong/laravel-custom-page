<?php
/**
 * User: Wangzd
 * Time: 上午10:32
 */

namespace Wangzd\Page\Contracts;


interface PageInterface
{

    /**
     * 获取页面配置
     * @param $platform
     * @param $page
     * @return mixed
     */
    public function getPage($platform,$page);


    /**
     * 报错页面配置
     * @param $platform
     * @param $page
     * @param $content
     * @return mixed
     */
	public function savePage($platform,$content);

}