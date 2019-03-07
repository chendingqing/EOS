<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6 0006
 * Time: 17:11
 */

namespace App\Http\Controllers\home;


use App\Http\Controllers\Controller;
use App\Models\RegUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegUserController extends Controller
{
    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function reg_user(){

        return view('home.reg.reg');
    }

    /**
     * 用户注册
     * @param RegUser $regUser 模型
     * @param Request $request 接收数据
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function reg(RegUser $regUser,Request $request)
    {
    $regUser->addUser($request->all());
    return redirect("home.index");
    }
    /**
     * 登录
     */

}