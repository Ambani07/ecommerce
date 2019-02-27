<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;

class TestController extends Controller
{
    //

    public function testfunction(Request $request){
        $name = $request->testname;

        if ($name == 'laravel') {
            return back()->with('success', '');
        } else if($name == 'found'){
            return back()->with('info', '');
        }else if($name == 'not found'){
            return back()->with('warning', '');
        }else{
            return back()->with('error', '');
        }

        
    }
}
