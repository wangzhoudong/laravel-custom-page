<?php
/**
 *------------------------------------------------------
 * BaseDictionaryOptionModel.php
 *------------------------------------------------------
 *
 * @author    wangzhoudong@foxmail.com
 * @date      2017/05/25 07:34
 * @version   V1.0
 *
 */

namespace Wangzd\Page\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CustomPageModel extends Model
{
    use SoftDeletes;

    /**
     * 数据表名
     */
    protected $table = "custom_page";

    /**
     * 主键
     */
    protected $primaryKey = "id";

    /**
     * 可以被集体附值的表的字段
     */
    protected $fillable = [
        'platform',
        'page',
        'key',
        'name',
        'content'
    ];

}
