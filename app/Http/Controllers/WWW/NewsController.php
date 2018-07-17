<?php

namespace App\Http\Controllers\WWW;

use App\Http\Controllers\Controller;
use App\Model\Library;

class NewsController extends Controller
{
    /**
     * CLASS index图文首页
     * Created by PhpStorm.
     * User: lv
     * Date: 2018-7-16
     * Time: 17:17
     */
    public function index(){
        $model = new Library();
        $data = $model->getList();
        $title = '图文';
        return view('www.news.index',['title' => $title,'data'=> $data]);
    }
}
