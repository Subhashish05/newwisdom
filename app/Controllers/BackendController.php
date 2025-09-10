<?php

namespace App\Controllers;

class BackendController extends BaseController
{
    public function footer_enquiry()
    {
        $request = service('request');
        $name = $request->getPost('name');
        $email = $request->getPost('email');
        $number = $request->getPost('number');
        $message = $request->getPost('message');
        $db = db_connect();
        $qurey = [
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'message' => $message,
        ];
        if ($db->table('contact')->insert($qurey)) {
            $db->table('notification')->insert(['head' => 'New Contact', 'body' => 'You received now contact enquiry from ' . $email . '.']);
            $data['page_name'] = 'Thank You!!!';
            return view('pages/thankyou', $data);
        } else {
            return redirect()->back();
        }
    }
    public function contact_form()
    {
        $request = service('request');
        $name = $request->getPost('name');
        $email = $request->getPost('email');
        $number = $request->getPost('number');
        $message = $request->getPost('message');
        $db = db_connect();
        $qurey = [
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'message' => $message,
        ];
        if ($db->table('contact')->insert($qurey)) {
            $db->table('notification')->insert(['head' => 'New Contact', 'body' => 'You received now contact enquiry from ' . $email . '.']);
            return redirect()->to('/contact')->with('success', 'Form submitted Successfully!!!');
        } else {
            return redirect()->back();
        }
    }
    public function enrollment_form()
    {
        $request = service('request');
        $name = $request->getPost('name');
        $email = $request->getPost('email');
        $number = $request->getPost('number');
        $father_name = $request->getPost('father_name');
        $DOB = $request->getPost('DOB');
        $gender = $request->getPost('gender');
        $transport = $request->getPost('transport');
        $aadhar = $request->getPost('aadhar');
        $address = $request->getPost('address');
        $db = db_connect();
        $qurey = [
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'father_name' => $father_name,
            'DOB' => $DOB,
            'gender' => $gender,
            'transport' => $transport,
            'aadhar' => $aadhar,
            'address' => $address,
        ];

        if ($db->table('enrollment')->insert($qurey)) {
            $query2 = ['head' => 'New Enrollment', 'body' => 'You received now enrollment for ' . $name . '.',];
            $db->table('notification')->insert($query2);
            return redirect()->to('/thankyou')->with('success', 'Application submitted Successfully!!!');
        } else {
            return redirect()->back();
        }
    }
    public function getNotices()
    {
        $db = db_connect();
        $data = $db->table('noticeboard')->orderBy('date', 'DESC')->get()->getResult();

        return $this->response->setJSON($data);
    }
}
