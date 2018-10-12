<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Category;

class SiteController extends Controller
{

    protected $model;
    protected $totalpages = 5;

    public function index()
    {
        $datas = Post::where('status','A')->paginate($this->totalpages);
        return view ("site.index", compact('datas'));
    }

    // public function categoria()
    // {
    //     return view ('site.pages.categoria');
    // }

    public function post($id)
    {
        $datas = Post::where('id',$id)->with('user','category')->get();
        return view ('site.pages.post', compact('datas'));
    }    

    public function category($id)
    {

        $datas = Post::where('category_id',$id)->where('status','A')->with('category')->paginate($this->totalpages);

        $cate = Category::select('name')->where('id',$id)->get();
        $title = $cate[0]->name;

        return view ('site.pages.category', compact('datas','title'));
    }

    // public function showPost($id)
    // {
    //     $category = $this->category;
    //     $data = Post::where('id',$id)->with('user','category')->get();
    //     return view("site.pages.showPost", compact('data','category'));
    // }

    public function empresa()
    {
        return view ('site.pages.empresa');
    }

    public function contato()
    {
        return view ('site.pages.contato');
    }
}
