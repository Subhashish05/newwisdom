<?php

namespace App\Controllers;

use App\Models\Backend;

class Pages extends BaseController
{
    public function index(): string
    {
        $model = model(Backend::class);
        $data['topArticle'] = $model->getTopArticle();
        $db = db_connect();
        $data['images'] = $db->table('gallery')->get()->getResult();
        $data['notices'] = $db->table('noticeboard')->orderBy('date', 'DESC')->limit(3)->get()->getResult();
        $data['page_name'] = 'home';

        return view('pages/index', $data);
    }
    public function notice(): string
    {
        $data['page_name'] = 'notice';
        $db = db_connect();
        $data['notices'] = $db->table('noticeboard')->orderBy('date', 'DESC')->get()->getResult();
        return view('pages/notice', $data);
    }
    public function gallery(): string
    {
        $data['page_name'] = 'gallery';
        $db = db_connect();
        $data['images'] = $db->table('gallery')->get()->getResult();
        return view('pages/gallery', $data);
    }
    public function teachers(): string
    {
        $data['page_name'] = 'teachers';
        $db = db_connect();
        $data['teachers'] = $db->table('teachers')->get()->getResult();
        return view('pages/teachers', $data);
    }
    public function article($title): string
    {
        $model = model(Backend::class);
        $data['topArticle'] = $model->getTopArticle();
        $data['article'] = $model->getArticle($title);
        $data['page_name'] = 'article';
        return view('pages/article', $data);
    }
    public function articles($set = 0)
    {
        $model = model(Backend::class);
        $data['allArticle'] = $model->getAllArticle($set * 6);
        $data['page_name'] = 'articles';
        if ($data['allArticle'] == null) return redirect()->to('/articles');
        else return view('pages/articles', $data);
    }
    public function page($page): string
    {
        $data['page_name'] = $page;
        return view('pages/' . $page, $data);
    }
}
