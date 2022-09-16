<?php

namespace App\Http\Controllers\backend\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class DashboardController extends Controller
{
    public function home(){
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Dashboard';
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Dashboard';
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Dashboard';
        $data['css'] = array(
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
            'dashboard.js',
        );
        $data['funinit'] = array(
            'Dashboard.init()'
        );
        $data['header'] = array(
            'title' => 'My Dashboard',
            'breadcrumb' => array(
                'My Dashboard' => 'My Dashboard',
            )
        );
        return view('backend.pages.dashboard.home', $data);
    }
}
