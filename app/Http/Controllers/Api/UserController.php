<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/15 0015
 * Time: 9:21
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\RegUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    //TODO 手机验证码
    /**
     *注册用户
     * @param RegUser $regUser
     * @param Request $request
     * @return array
     */
    public function reg(RegUser $regUser,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255|unique:reg_users',
            'password' => 'required|max:16|min:6',
            'pay_password' => 'required',
            'phone' => [
                'required',
                'regex:/^[1][3,4,5,7,8,9][0-9]{9}$/',
                'unique:reg_users'
            ],
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/',
                'unique:reg_users'
            ],

        ]);
        if($validator->fails()) {
            //返回错误
            return [
                'status' => "error",
                //获取错误信息
                "message" => $validator->errors()->first()
            ];
        }else{
            $regUser->addUser($request->all());
            return [
                'status' => "200",
                "message" => '注册成功'
            ];
        }


    }

    /**
     * 用户登录
     * @param Request $request
     * @return array
     */
    public function login(RegUser $regUser,Request $request)
    {
        $name = $request->all();

        $user =DB::table('reg_users')->where('username', $name['username'])->first();

        if (($user)) {
            if ($user && Hash::check($name['password'], $user->password)) {
                return [
                    'status' => 'true',
                    'message' => '登录成功',
                    'user_id' => $user->id,
                    'username' => $user->username
                ];
            }else{
                return [
                    'status' => 'error',
                    'message' => '密码错误'
                ];
            }
        }else{
            return [
                'status' => 'error',
                'message' => '用户不存在，请注册！'
            ];
        }
    }
    //TODO 修改密码


}