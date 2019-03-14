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

class GoodsController extends Controller
{

    public function index()
    {
        return view('goods/index')->withGoods(Good::paginate(15));
    }

}