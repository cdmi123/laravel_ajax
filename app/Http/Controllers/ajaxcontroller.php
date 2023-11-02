<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajaxcontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function ajax(Request $req)
    {
        $val = $req->val1;

        if(isset($req->val))
        {
            $val++;
        }
        else
        {
            if($val!=0)
            {
                    $val--;
            }
        }
        
        echo $val;
    }
}
