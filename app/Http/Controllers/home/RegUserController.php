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
use Illuminate\Support\Facades\DB;
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
     *前台 用户注册
     * @param RegUser $regUser 模型
     * @param Request $request 接收数据
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function reg(RegUser $regUser,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255|unique:users',
            'password' => 'required|confirmed:password_confirmation',
            'pay_password' => 'required|confirmed:password_confirmation',
            'phone' => 'required',
            'email' => 'required',
        ]);
        if($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }
    $regUser->addUser($request->all());
    return redirect("home/index");
    }
    /**
     * 登录
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required',
        'password' => 'required',
    ]);
        if($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        $all=$request->all();
        $data['username']=$all['name'];
        $data['password']=md5($all['password']);
        $users = DB::table('reg_users')->where("username",$data['username'])->get();

      if ($users[0]->password==$data['password']){
          return "欢迎登陆";
      }else{

          return redirect("/");
      }





    }

}