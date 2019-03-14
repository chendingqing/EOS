<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14 0014
 * Time: 13:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Good extends Model
{

    public function addGoods($array)
    {
        $this->name         = $array['name'];
        $this->max_money = $array['max_money']; // optional
        $this->min_money  =$array['min_money']; // optional
        $this->investment  = $array['investment']; // optional
        $this->profit  = $array['profit']; // optional
        $this->content  = $array['content']; // optional
        $this->open_time  = $array['open_time']; // optional
        $this->status  = 0; // optional
        $this->save();
    }


}