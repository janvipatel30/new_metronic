<?php

namespace App\Http\Controllers\backend\Login;
use Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Login';
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Login';
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Login';
        $data['css'] = array(

        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(

        );
        $data['js'] = array(

        );
        $data['funinit'] = array(

        );
        return view('backend.pages.login.login', $data);
    }
}
