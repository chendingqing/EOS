<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6 0006
 * Time: 17:11
 */

namespace App\Http\Controllers\home;


use App\Http\Controllers\Controller;

class RegUserController extends Controller
{

    public function reg_user(){


        return view('/home/reg/reg');
    }
}