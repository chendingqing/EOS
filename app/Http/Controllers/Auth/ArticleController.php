<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 10:14
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{
    public function index()
    {


        return view('article/index')->withArticles(Article::paginate(15));

    }

    public function add(Article $article,Request $request )
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:users',
            'content' => 'required',
        ]);
        if($validator->fails()) {
            return redirect('admin/article')->withErrors($validator)->withInput();
        }


      $article->addArticle($request->all());
        return redirect("admin/article");
    }

    /**
     * 修改视图
     * @param Article $article
     * @param $id
     * @return bool
     */
    public function edit(Article $article,$id){
        if(!$id) return false;
        return view('article.edit')
            ->withArticle($article->find($id));
    }
    /**
     * 更新数据
     */
    public function update(Article $article,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);
        if($validator->fails()) {
            return redirect('admin/article')->withErrors($validator)->withInput();
        }
        $article->updateArticle($request->all());
        return redirect('admin/article');
    }
    /**
     * 删除数据
     */
    public function delete(Article $article,$id)
    {
        if(!$id) return false;
        $article->where('id', $id)->delete();
        return redirect('admin/article');
    }

}