<?php
namespace App\Controllers;
class BackendController extends BaseController{
    public function footer_enquiry(){
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
        if($db->table('contact')->insert($qurey)){
            $data['page_name'] = 'Thank You!!!';
            return view('pages/thankyou', $data);
        } else{
            return redirect()->back();
        }
    }
    public function contact_form(){
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
        if($db->table('contact')->insert($qurey)){
            return redirect()->to('/contact')->with('success', 'Form submitted Successfully!!!');
        } else{
            return redirect()->back();
        }
    }
    public function enrollment_form() {
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

        if($db->table('enrollment')->insert($qurey)){
            return redirect()->to('/thankyou')->with('success', 'Application submitted Successfully!!!');
        } else{
            return redirect()->back();
        }
    }
}