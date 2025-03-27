<?php

namespace App\Controllers;

use App\Models\Backend;

class Pages extends BaseController
{
    public function index(): string
    {
        $model = model(Backend::class);
        $data['topNews'] = $model->getTopNews();
        $db = db_connect();
        $data['images'] = $db->table('gallery')->get()->getResult();
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
    public function news($title): string
    {
        $model = model(Backend::class);
        $data['topNews'] = $model->getTopNews();
        $data['article'] = $model->getNews($title);
        $data['page_name'] = 'news';
        return view('pages/news', $data);
    }
    public function event($set = 0)
    {
        $model = model(Backend::class);
        $data['allNews'] = $model->getAllNews($set*6);
        $data['page_name'] = 'event';
        if($data['allNews'] == null) return redirect()->to('/event');
        else return view('pages/event', $data);
    }
    public function page($page): string
    {
        $data['page_name'] = $page;
        return view('pages/' . $page, $data);
    }
}
