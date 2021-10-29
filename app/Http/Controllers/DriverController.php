<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assigned_Task;

class DriverController extends Controller
{
    public function driver_view_task(){
        $info = assigned_task::all();

        return view('driver.driver_view_task',compact('info'));
    }

    public function driver_search_task(Request $request){
        $search = $request->search;

        $info = assigned_task::where('users_id','Like','%'.$search.'%')->get();

        return view('driver.driver_view_task',compact('info'));
    }
}
