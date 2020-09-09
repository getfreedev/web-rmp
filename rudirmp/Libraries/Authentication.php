<?php namespace Rudi\Libraries;

use Rudi\Models\UserModel;

class Authentication
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserModel();   
    }
}
