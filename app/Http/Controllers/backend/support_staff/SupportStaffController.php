<?php

namespace App\Http\Controllers\backend\support_staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportStaff;
use Config;

class SupportStaffController extends Controller
{
    public function list(){

        // $objSS = new SupportStaff();
        // $data['ss_details'] = $objSS->get_support_staff_details();

        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Support Staff';
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Support Staff';
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Support Staff';
        $data['css'] = array(
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
            'support_staff.js'
        );
        $data['funinit'] = array(
            'Support_Staff.init()',
        );
        $data['header'] = array(
            'title' => 'Support Staff',
            'breadcrumb' => array(
                'Dashboard' => route('home'),
                'Support Staff' => 'Support Staff',
            )
        );
        return view('backend.pages.support_staff.list', $data);
    }

    public function add(){



        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Add Support Staff';
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Add Support Staff';
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Add Support Staff';
            $data['css'] = array(
                'toastr/toastr.min.css'
            );
            $data['plugincss'] = array(
            );
            $data['pluginjs'] = array(
                'toastr/toastr.min.js',
                'plugins/validate/jquery.validate.min.js',
            );
            $data['js'] = array(
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'support_staff.js'

            );
            $data['funinit'] = array(
                'Support_Staff.init()',
            );
            $data['header'] = array(
                'title' => 'Add Support Staff',
                'breadcrumb' => array(
                    'Dashboard' => route('home'),
                    'Support Staff List' => route('support-staff'),
                    'Add Support Staff' => 'Add Support Staff',
                )
            );
            return view('backend.pages.support_staff.add', $data);


    }

    public function ajaxcall(Request $request){

        $action = $request->input('action');
        print_r($action);
        die();
        switch ($action) {
            case 'getdatatable':
                $objSS = new SupportStaff();
                $list = $objSS->getdatatable();

                echo json_encode($list);
                break;
        }
    }

}
