<?php

namespace App\Models;

use Eloquent as Model;

use Zizaco\Entrust\Traits\EntrustUserTrait;

class Article extends Model
{
    /**
     * 添加新闻
     * @param $array数据
     */
    public function addArticle($array)
    {
        $this->title         = $array['title'];
        $this->content = $array['content']; // optional
        $this->save();
    }

    /**
     * 修改数据
     * @param $array
     */

    public function updateArticle($array)
    {
        $flight = $this->find($array['id']);
        $flight->title = $array['title'];
        $flight->content = $array['content']; // optional
        $flight->save();

    }


}
