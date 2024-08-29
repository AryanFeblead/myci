<?php

namespace App\Controllers;

use App\Models\UserModel;

class Signup extends BaseController
{
    public function index()
    {
        echo view("common/header");
        echo view("signup");
    }
    public function store()
    {
        $validate = [
            'username' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|min_length[10]',
            'pass' => 'required|min_length[8]',
            'gender' => 'required',
            'hobbies' => 'required',
        ];

        
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $pass= $this->request->getPost('pass');
        $gender = $this->request->getPost('gender');
        $hobbies = $this->request->getPost('hobbies');
        
        if (is_array($hobbies)) {
            $hobbies = json_encode($hobbies);
        }

        $data = [
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'gender' => $gender,
            'hobbies' => $hobbies,
            'pass' => password_hash($pass, PASSWORD_DEFAULT)
        ];
        
        if (!$this->validate($validate)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            session()->setFlashdata('data', $data);
            return redirect()->to('/signup');
        } else {
            $userModel = new UserModel();
            
            $userModel->save($data);
            return redirect()->to('login');
        }
    }
}
