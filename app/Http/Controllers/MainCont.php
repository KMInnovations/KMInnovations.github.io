<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class MainCont extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function test(){

        // $users = DB::select('select * from users where active = ?', [1]);
        $users = DB::select('select * from users');
        return view('main.main_test', ['users' => $users]);
    }
}
