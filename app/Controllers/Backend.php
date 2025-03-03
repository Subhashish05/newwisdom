<?php
namespace App\Controllers;
class Backend extends BaseController{
    public function footer_enquiry(): string {
        $data['page_name'] = 'Thank You!!!';
        return view('pages/thankyou', $data);
    }
}