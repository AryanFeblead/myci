<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        echo view("common/header");
        echo view("login");
    }
    public function verifylogin()
    {
        $validate = [
            'email' => 'required|valid_email',
            'pass' => 'required|min_length[8]'
        ];

        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('pass');
        if (!$this->validate($validate)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            session()->setFlashdata('email', $email);
            return redirect()->to('/login');
        } else {
            $userModel = new UserModel();
            $data = $userModel->where('email', $email)->first();
            
            if ($data && password_verify($pass, $data['pass'])) {
                session()->set([
                    'id' => $data['user_id'],
                    'username' => $data['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('dashboard');
            } else {
                return redirect()->to('login')->with('error', 'Invalid username or password');
            }
        }
    }

    public function dashboard()
    {
        if (!session()->get('logged_in'))
        {
            return redirect()->to('login');
        }
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('dashboard', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
