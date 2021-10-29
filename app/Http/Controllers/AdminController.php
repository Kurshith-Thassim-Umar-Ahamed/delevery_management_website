<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Vehicle;
use App\Models\Assigned_Task;

class AdminController extends Controller
{
    public function addviewpackage(){
        return view('admin.add_package');
    }

    public function deleteviewpackage(){
        $data = package::all();

        return view('admin.delete_package',compact('data'));
    }

    public function editviewpackage(){
        $packageupdate = package::all();
        return view('admin.edit_package', compact('packageupdate'));
    }

    public function addviewvehicle(){
        return view('admin.add_vehicle');
    }

    public function deleteviewvehicle(){
        $vehi = vehicle::all();

        return view('admin.delete_vehicle',compact('vehi'));
    }

    public function editviewvehicle(){
        $vehicleupdate = vehicle::all();
        return view('admin.edit_vehicle', compact('vehicleupdate'));
    }

    public function searchviewpackage(){
        $data = package::all();

        return view('admin.search_package',compact('data'));
    }

    public function searchviewvehicle(){
        $vehi = vehicle::all();

        return view('admin.search_vehicle',compact('vehi'));
    }

    public function searchviewassignedtask(){
        $datatask = assigned_task::all();

        return view('admin.search_assignedtask',compact('datatask'));
    }
    
    public function uploadpackage(Request $request){
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

    public function remove_data($id){
        $info = Package::find($id);
        $info->delete();
        return redirect()->back();
    }

    public function uploadvehicle(Request $request){
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

    public function remove_data_vehicle($id){
        $infovehicle = vehicle::find($id);
        $infovehicle->delete();
        return redirect()->back();
    }

    public function search_package(Request $request){
        $search = $request->search;

        $data = Package::where('sender_name','Like','%'.$search.'%')->
        orWhere('resever_name','Like','%'.$search.'%')->get();

        return view('admin.search_package', compact('data'));
    }

    public function search_vehicle(Request $request){
        $search = $request->search;

        $vehi = vehicle::where('vehicle_registrationNumber','Like','%'.$search.'%')->
        orWhere('vehicle_ownerName','Like','%'.$search.'%')->get();

        return view('admin.search_vehicle', compact('vehi'));
    }

    public function search_task(Request $request){
        $search = $request->search;

        $datatask = assigned_task::where('users_id','Like','%'.$search.'%')->get();

        return view('admin.search_assignedtask', compact('datatask'));
    }

    public function update_package_data($id){
        $data = Package::find($id);

        return view('admin.update_package_data', compact('data'));
    }

    public function admin_edit_package(Request $request, $id){
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
    
    public function update_vehicle_data($id){
        $data = vehicle::find($id);

        return view('admin.update_vehicle_data', compact('data'));
    }
    
    public function admin_edit_vehicle(Request $request, $id){
        $vehicles= vehicle::find($id);

        $vehicles->vehicle_registrationNumber = $request->vrnum;
        $vehicles->vehicle_Type = $request->option1;
        $vehicles->vehicle_Status = $request->option2;
        $vehicles->vehicle_ownerName = $request->voname;
        $vehicles->vehicle_ownerAddress = $request->voaddress;
        $vehicles->vehicle_ownerTelephoneNumber = $request->vonum;

        $vehicles->save();
        return redirect()->back()->with('message','Update Sucessful');
    }

}
