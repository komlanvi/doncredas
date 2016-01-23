<?php

namespace App\Repositories;


use App\Email;

class EmailRepository implements EmailRepositoryInterface
{
    protected $email;

    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    public function save($mail)
    {
        $email = new $this->email;
        $email->email = $mail;
        $email->save();
    }
}