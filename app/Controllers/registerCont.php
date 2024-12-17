<?php 
namespace App\Controllers;

use App\Models\registerModel;

class RegisterCont extends BaseController {

    public function index() {
        $registerModel = new registerModel();
        $data['users'] = $registerModel->findAll();
        return view('quality/register', $data);
    }

    public function signUp() {

        $registerModel = new registerModel();
        $data = [
            'name'=>$_POST['name'],
            'username'=>$_POST['username'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
        ];

        if ($registerModel->insert($data)) {
            return redirect()->to(base_url('/login'))->with('success', 'Registration successful');
        } else {
            return redirect()->back()->withInput()->with('error', 'Registration failed');
        }
    }
}
?>