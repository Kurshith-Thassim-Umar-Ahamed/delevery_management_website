<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Vehicle;
use App\Models\Assigned_Task;

class ManagerController extends Controller
{
    public function manager_addviewpackage(){
        return view('manager.add_package');
    }

    public function manager_deleteviewpackage(){
        $data = package::all();

        return view('manager.delete_package',compact('data'));
    }

    public function manager_editviewpackage(){
        $packageupdate = package::all();
        return view('manager.edit_package', compact('packageupdate'));
    }

    public function manager_addviewvehicle(){
        return view('manager.add_vehicle');
    }

    public function manager_deleteviewvehicle(){
        $vehi = vehicle::all();

        return view('manager.delete_vehicle',compact('vehi'));
    }

    public function manager_editviewvehicle(){
        $vehicleupdate = vehicle::all();
        return view('manager.edit_vehicle', compact('vehicleupdate'));
    }

    public function manager_searchviewpackage(){
        $data = package::all();

        return view('manager.search_package',compact('data'));
    }

    public function manager_searchviewvehicle(){
        $vehi = vehicle::all();

        return view('manager.search_vehicle',compact('vehi'));
    }

    public function manager_searchviewassignedtask(){
        $datatask = assigned_task::all();

        return view('manager.search_assignedtask',compact('datatask'));
    }
    
    public function manager_uploadpackage(Request $request){
        $package=new Package;

        $package->sent_date = $request->date;
        $package->package_status = $request->pstatus;
        $package->sender_name = $request->sname;
        $package->sender_address = $request->saddress;
        $package->sender_telephoneNumber = $request->snum;
        $package->resever_name = $request->rname;
        $package->resever_address = $request->raddress;
        $package->resever_telephoneNumber = $request->rnum;

        $package->save();
        return redirect()->back()->with('message','Package Added Sucessfully');
    }

    public function manager_remove_data($id){
        $info = Package::find($id);
        $info->delete();
        return redirect()->back();
    }

    public function manager_uploadvehicle(Request $request){
        $vehicles=new vehicle;

        $vehicles->vehicle_registrationNumber = $request->vrnum;
        $vehicles->vehicle_Type = $request->option1;
        $vehicles->vehicle_Status = $request->option2;
        $vehicles->vehicle_ownerName = $request->voname;
        $vehicles->vehicle_ownerAddress = $request->voaddress;
        $vehicles->vehicle_ownerTelephoneNumber = $request->vonum;

        $vehicles->save();
        return redirect()->back()->with('message','Vehicle Added Sucessfully');
    }

    public function manager_remove_data_vehicle($id){
        $infovehicle = vehicle::find($id);
        $infovehicle->delete();
        return redirect()->back();
    }

    public function manager_search_package(Request $request){
        $search = $request->search;

        $data = Package::where('sender_name','Like','%'.$search.'%')->
        orWhere('resever_name','Like','%'.$search.'%')->get();

        return view('manager.search_package', compact('data'));
    }

    public function manager_search_vehicle(Request $request){
        $search = $request->search;

        $vehi = vehicle::where('vehicle_registrationNumber','Like','%'.$search.'%')->
        orWhere('vehicle_ownerName','Like','%'.$search.'%')->get();

        return view('manager.search_vehicle', compact('vehi'));
    }

    //Tasks
    public function manage_task_view_add(){
        return view('manager.manage_task_view_add');
    }
    public function manage_task_view_delete(){
        $datatask = assigned_task::all();

        return view('manager.manage_task_view_delete',compact('datatask'));
    }
    public function manage_task_view_edit(){
        $taskupdate = assigned_task::all();
        return view('manager.manage_task_view_edit',compact('taskupdate'));
    }

    public function manager_upload_task(Request $request){
        $task=new assigned_task;

        $task->users_id = $request->dID;
        $task->vehicle_id = $request->vID;
        $task->package_id = $request->pID;

        $task->save();
        return redirect()->back()->with('message','Task Assigned Sucessfully');
    }

    public function manager_remove_data_task($id){
        $infotasks = assigned_task::find($id);
        $infotasks->delete();
        return redirect()->back();
    }

    public function manager_search_task(Request $request){
        $search = $request->search;

        $datatask = assigned_task::where('users_id','Like','%'.$search.'%')->get();

        return view('manager.search_assignedtask', compact('datatask'));
    }

    public function manager_update_package_data($id){
        $data = Package::find($id);

        return view('manager.manager_update_package_data', compact('data'));
    }
    
    public function manager_edit_package(Request $request, $id){
        $package = Package::find($id);

        $package->sent_date = $request->date;
        $package->package_status = $request->pstatus;
        $package->sender_name = $request->sname;
        $package->sender_address = $request->saddress;
        $package->sender_telephoneNumber = $request->snum;
        $package->resever_name = $request->rname;
        $package->resever_address = $request->raddress;
        $package->resever_telephoneNumber = $request->rnum;

        $package->save();
        return redirect()->back()->with('message','Update Sucessful');
    }
    
    public function manager_update_vehicle_data($id){
        $data = vehicle::find($id);

        return view('manager.manager_update_vehicle_data', compact('data'));
    }

    public function manager_edit_vehicle(Request $request, $id){
        $vehicles=vehicle::find($id);

        $vehicles->vehicle_registrationNumber = $request->vrnum;
        $vehicles->vehicle_Type = $request->option1;
        $vehicles->vehicle_Status = $request->option2;
        $vehicles->vehicle_ownerName = $request->voname;
        $vehicles->vehicle_ownerAddress = $request->voaddress;
        $vehicles->vehicle_ownerTelephoneNumber = $request->vonum;

        $vehicles->save();
        return redirect()->back()->with('message','Update Sucessful');
    }
    
    public function manager_update_task($id){
        $data = assigned_task::find($id);

        return view('manager.manager_update_task', compact('data'));
    }

    public function manager_edit_task(Request $request, $id){
        $task=assigned_task::find($id);

        $task->users_id = $request->dID;
        $task->vehicle_id = $request->vID;
        $task->package_id = $request->pID;

        $task->save();
        return redirect()->back()->with('message','Update Sucessful');
    }
}
