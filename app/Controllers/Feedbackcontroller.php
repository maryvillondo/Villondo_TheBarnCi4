<?php

namespace App\Controllers;

use App\Models\UserModel;

class Feedbackcontroller extends BaseController
{
    public function index()
    {
        $feedbackModel = new UserModel();
        $data['feedback'] = $feedbackModel->orderBy('feedback_time_created', 'ASC')->findAll();

        echo view('templates/header');
        echo view('feedback/Blogfeedback', $data);
        echo view('templates/footer');
    }
}
