<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\EmailRequest;

use App\Http\Requests;
use App\Repositories\EmailRepository;

class EmailController extends Controller
{
    public function getEmail()
    {
        return view("op.email.form");
    }

    public function postEmail(EmailRequest $emailRequest, EmailRepository $emailRepository)
    {
        $emailRepository->save($emailRequest->input('email'));

        return view('op.email.email_ok');
    }
}
