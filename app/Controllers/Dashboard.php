<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Dashboard extends BaseController
{

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function print($user)
    {
        $data = [
            'title' => 'Cetak Kartu | Edulab',
            'data' => $this->loginModel->getLoginInfo($user)
        ];
        return view('print', $data);
    }
}
