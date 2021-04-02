<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;


class LiveSearch extends Controller
{
    public function index(){
             return view('livesearch');

    }

    function generateRandomID(){
      

    return $randomString;
      
    }

    function action(Request $request)
    {
       
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {

        


        $data = DB::table('customers')
        ->where('Name', 'like', '%'.$query.'%')
         ->orWhere('Email', 'like', '%'.$query.'%')
         ->orWhere('Address', 'like', '%'.$query.'%')
         ->orWhere('Mobile', 'like', '%'.$query.'%')
         ->orWhere('Passport', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('customers')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->id.'</td>
         <td>'.$row->Name.'</td>
         <td>'.$row->Email.'</td>
         <td>'.$row->Address.'</td>
         <td>'.$row->Mobile.'</td>
         <td>'.$row->Passport.'</td>
        </tr>
        ';
       }
       
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

