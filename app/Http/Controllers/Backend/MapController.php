<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    //
          
    public function MapView(){
        $maps = Map::latest()->get();
        return view('backend.map.map_view',compact('maps'));
    }
    public function MapAdd(){
        $maps = Map::latest()->get();
        return view('backend.map.add_map',compact('maps'));
    }

    public function MapStore(Request $request){
        $request->validate([
        'map_link'         => 'required',
        ]);
        Map::insert([
        'map_link'       => $request->map_link,
        ]);
         $notification = array(
            'message' => 'Map Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->back()->with($notification);
    }

    public function MapEdit($id){

        
        $maps = Map::findOrFail($id);
        return view('backend.map.map_edit',compact('maps'));

    }

    public function MapUpdate(Request $request,$id){

        Map::FindOrFail($id)->update([

        'degree_name'       => $request->degree_name,
        'from'              => $request->from,
        'desp'              => $request->desp,
        'date'              => $request->date,
        
       
        ]);
         $notification = array(
            'message' => 'Map Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.map')->with($notification);

    }

    public function MapDelete($id){
       Map::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Map Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
