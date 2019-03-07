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

    public function reg_user(){

        return view('home.reg.reg');
    }

    public function reg(RegUser $regUser,Request $request)
    {

    $regUser->addUser($request->all());
    return redirect("home.index");


    }
}