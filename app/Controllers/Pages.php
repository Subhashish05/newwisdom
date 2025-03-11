<?php

namespace App\Controllers;

use App\Models\Backend;

class Pages extends BaseController
{
    public function index(): string
    {
        $model = model(Backend::class);
        $data['topNews'] = $model->getTopNews();
        $data['page_name'] = 'home';

        return view('pages/index', $data);
    }
    public function news($title): string{
        $model = model(Backend::class);
        $data['article'] = $model->getNews($title);
        $data['page_name'] = 'news';
        return view('pages/news', $data);
    }
    public function page($page): string
    {
        $data['page_name'] = $page;
        return view('pages/'. $page, $data);
    }
}
