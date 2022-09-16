<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class SupportStaff extends Model
{
    use HasFactory;

    public function getdatatable()
    {
        // ccd($employee_list);
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'support_staff.id',
            1 => 'users.full_name',
            2 => DB::raw('(CASE WHEN users.status = "A" THEN "Active" ELSE "Inactive" END)'),

        );
        $query = SupportStaff ::from('support_staff')
                        ->join('users', 'users.id', '=', 'support_staff.u_id')
                        ->where('users.is_deleted', 'N')
                        ->where('users.user_role','2');


        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                    ->take($requestData['length'])
                    ->select( DB::raw('CONCAT(first_name, " ", last_name) AS full_name') , 'users.email', 'support_staff.u_id' , 'support_staff.id', 'users.status', DB::raw('(CASE WHEN users.status = "A" THEN "Active" ELSE "Inactive" END) as statuss ') )
                    ->get();

        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {

            $actionhtml  = '';
            // $actionhtml =  $actionhtml. '<button type="button" class="btn btn-icon" id="edit_supplier_btn" data-id="' . $row["id"] . '"   data-toggle="modal" data-target="#edit_supplier"><i class="fa fa-pencil-square-o text-warning" title="Edit Supplier"></i></button>';


            if($row['status'] == 'A'){
                $status = '<label class="label label-sm label-info">'.$row['statuss'].'</label>';

                  $actionhtml =  $actionhtml. '<a href="#" data-toggle="modal" data-target="#deactiveModel" class="btn btn-icon  deactive-supplier" data-id="' . $row["u_id"] . '" title="Inactive Supplier" ><i class="fa fa-times text-danger" ></i></a>';

            }else{
                $status = '<label class="label label-sm label-danger">'.$row['statuss'].'</label>';

                  $actionhtml =  $actionhtml. '<a href="#" data-toggle="modal" data-target="#activeModel" class="btn btn-icon  active-supplier" data-id="' . $row["u_id"] . '" title="Active Supplier" ><i class="fa fa-check text-success" ></i></a>';
            }

              $actionhtml =  $actionhtml. '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  delete-supplier" data-id="' . $row["u_id"] . '"  title="Delete Supplier"><i class="fa fa-trash text-danger" ></i></a>';



            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['full_name'];
            $nestedData[] = $row['email'];
            $nestedData[] = $status;
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }
}
