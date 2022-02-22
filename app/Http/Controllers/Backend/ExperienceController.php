<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    //
         
    public function ExpView(){
        $exps = Experience::latest()->get();
        return view('backend.exp.exp_view',compact('exps'));
    }
    public function ExpAdd(){
        $exps = Experience::latest()->get();
        return view('backend.exp.add_exp',compact('exps'));
    }

    public function ExpStore(Request $request){
        $request->validate([
            
        'company_name'       => 'required',
        'post_name'          => 'required',
        'desp'              => 'required',
        
        ]);
        Experience::insert([
        'company_name'       => $request->company_name,
        'post_name'          => $request->post_name,
        'date'              => $request->date,
        'desp'              => $request->desp,
        ]);
         $notification = array(
            'message' => 'Experience Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.exp')->with($notification);
    }

    public function ExpEdit($id){

        
        $exps = Experience::findOrFail($id);
        return view('backend.exp.exp_edit',compact('exps'));

    }

    public function ExpUpdate(Request $request,$id){

        Experience::FindOrFail($id)->update([

        'company_name'       => $request->company_name,
        'post_name'          => $request->post_name,
        'date'              => $request->date,
        'desp'              => $request->desp,
        
       
        ]);
         $notification = array(
            'message' => 'Exp Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.exp')->with($notification);

    }

    public function ExpDelete($id){
       Experience::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Exp Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
