<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data['page_name'] = 'home';
        return view('pages/index', $data);
    }
    public function page($page): string
    {
        $data['page_name'] = $page;
        return view('pages/'. $page, $data);
    }
}
