<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/7 0007
 * Time: 14:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class RegUser extends Model
{

    public function addUser($array)
    {
        $this->username         = $array['username'];
        $this->password = bcrypt($array['password']); // optional
        $this->pay_password  =bcrypt($array['pay_password']); // optional
        $this->phone  = $array['phone']; // optional
        $this->email  = $array['email']; // optional
        $this->save();

    }


}