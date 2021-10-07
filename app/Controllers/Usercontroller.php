<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FeedbackModel;

class Usercontroller extends BaseController
{

    public function index()
    {
        $data = [];
        helper(['form']);

        echo view('templates/header');
        echo view('feedback/feedback');
        echo view('templates/footer');
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'username' => 'required|min_length[2]|max_length[100]',
            'feedback' => 'required|min_length[4]|max_length[280]',
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $user_name = $this->request->getVar('username');

            $user_data = [
                'username'  => $user_name,
                'feedback' => $this->request->getVar('feedback'),
            ];

            $userModel->insert($user_data);

            return $this->response->redirect('/allfeedback');
        } else {
            $user_data['validation'] = $this->validator;

            echo view('templates/header');
            echo view('feedback/feedback', $user_data);
            echo view('templates/footer');
        }
    }
}
