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

    public function getPage($platform,$page)
    {
       $data =   CustomPageModel::where("platform",$platform)->where("page",$page)->pluck('content','key');
       return $data;
    }

    public function getPageKey($platform,$page,$key)
    {
        $data =   CustomPageModel::select('content')->where("platform",$platform)->where("page",$page)->where('key',$key)->first();
        return $data;

    }

    public function savePage($platform, $content)
    {
        $data = ['platform'=>$platform];
        foreach($content as $value) {
            $data['page'] = $value['page'];
            $data['key'] = $value['key'];
            $data['content'] = $value['value'];
            CustomPageModel::updateOrCreate(['platform'=>$platform,'page'=>$value['page'],'key'=>$value['key']],$data);
        }
        return true;
    }


}
