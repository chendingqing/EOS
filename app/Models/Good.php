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

    protected $fillable = ['name', 'max_money','min_money','investment','profit','content','open_time','status'];
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

    public function updateGoods($array)
    {
        $flight = $this->find($array['id']);
        $flight->name         = $array['name'];
        $flight->max_money = $array['max_money']; // optional
        $flight->min_money  =$array['min_money']; // optional
        $flight->investment  = $array['investment']; // optional
        $flight->profit  = $array['profit']; // optional
        $flight->content  = $array['content']; // optional
        $flight->open_time  = $array['open_time']; // optional
        $flight->status  = 0; // optional
        $flight->save();
    }

}