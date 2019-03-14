<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14 0014
 * Time: 13:39
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\Good;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class GoodsController extends Controller
{
    /**
     * 项目管理
     * @return mixed
     */
    public function index()
    {
        return view('goods/index')->withGoods(Good::paginate(15));
    }

    /**
     *
     * 添加项目
     * @param Good $good
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function add(Good $good, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'max_money' => 'required|max:16|min:6',
            'min_money' => 'required',
            'investment' => 'required',
            'profit' => 'required',
            'content' => 'required',
            'open_time' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        $good->addGoods($request->all());
        return redirect("admin/goods");

    }

    /**
     * 编辑数据
     * @param Good $good
     * @param $id
     * @return bool
     */
    public function edit(Good $good, $id)
    {
        if (!$id) return false;
        return view('goods.edit')
            ->withGood($good->find($id));
    }

    /**
     *更新数据
     */
    public function update(Good $good, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'max_money' => 'required|max:16|min:6',
            'min_money' => 'required',
            'investment' => 'required',
            'profit' => 'required',
            'content' => 'required',
            'open_time' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin/goods')->withErrors($validator)->withInput();
        }
        $good->updateGoods($request->all());
        return redirect('admin/goods');
    }

    public function delete(Good $good,$id)
    {
        if(!$id) return false;
        $good->where('id', $id)->delete();
        return redirect('admin/goods');
    }


}