<?php
/**
 *------------------------------------------------------
 * CartController.php
 *------------------------------------------------------
 *
 * @author    wangzhoudong@foxmail.com
 * @version   V1.0
 *
 */

namespace Wangzd\Page\Https\Controllers;

use Illuminate\Http\Request;
use SimpleShop\Cart\CartService;
use SimpleShop\Commons\Https\Controllers\Controller;
use SimpleShop\Commons\Utils\ReturnJson;

class PageController extends Controller
{
    /**
     * @var CartService
     */
    private $_service;

    /**
     * CartController constructor.
     */
    public function __construct()
    {
        $this->_service = new CartService();
    }

    /**
     * 获取所有
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        $data = $this->_service->getAll();
        return ReturnJson::success($data);
    }

    /**
     * 获取详情
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $data = $this->_service->detail($id);
        return ReturnJson::success($data);
    }

    /**
     * 更新
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        $this->_service->update($id, $request['quantity']);
        return ReturnJson::success();
    }

    /**
     * 增添
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $resData = $this->_service->store($request['goods_id'], $request['quantity']);
        return ReturnJson::success($resData);
    }

    /**
     * 删除
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $this->_service->remove($id);
        return ReturnJson::success();
    }

    /**
     * 删除 ByIds
     *
    18920563579
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteByIds(Request $request)
    {
        $this->_service->deleteByIds($request->all());
        return ReturnJson::success();
    }

}
