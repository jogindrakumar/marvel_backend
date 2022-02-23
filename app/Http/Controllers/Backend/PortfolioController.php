<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;

class PortfolioController extends Controller
{
    //
     public function PortfolioView(){
        $portfolios = Portfolio::latest()->get();
        return view('backend.portfolio.portfolio_view',compact('portfolios'));
    }
    public function PortfolioAdd(){
        $portfolios = Portfolio::latest()->get();
        return view('backend.portfolio.add_portfolio',compact('portfolios'));
    }

    public function PortfolioStore(Request $request){
        $request->validate([
            
        'project_name'    => 'required',
        'project_img'     => 'required',
        ]);

        $image = $request->file('project_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1504,1018)->save('upload/portfolio/'.$name_gen);
        $save_url = 'upload/portfolio/'.$name_gen;

        Portfolio::insert([
        'project_name'          => $request->project_name,
        'project_link'          => $request->project_link,
        'project_img'           => $save_url,
        ]);
         $notification = array(
            'message' => 'Portfolio Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.portfolio')->with($notification);
    }

    public function PortfolioEdit($id){

        // $Portfolios = Portfolio::find($id);
        $portfolios = Portfolio::findOrFail($id);
        return view('backend.portfolio.portfolio_edit',compact('portfolios'));

    }

    public function PortfolioUpdate(Request $request,$id){

        
        $old_image = $request->old_img;

        if($request->file('project_img')){

            unlink($old_image);
                $image = $request->file('project_img');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->save('upload/portfolio/'.$name_gen);
                $save_url = 'upload/portfolio/'.$name_gen;

                portfolio::FindOrFail($id)->update([
                    'project_img'               => $save_url,
                ]);
                $notification = array(
                    'message' => 'portfolio Updated Successfully',
                    'alert-type' => 'success'
                        );
                return redirect()->route('all.portfolio')->with($notification);


        }else{
                Portfolio::FindOrFail($id)->update([
                    'project_name'          => $request->project_name,
                    'project_link'          => $request->project_link,
                
                        
                    ]);
                    $notification = array(
                        'message' => 'Portfolio Updated Successfully',
                        'alert-type' => 'success'
                            );
                    return redirect()->route('all.portfolio')->with($notification);

        }

    }

    public function PortfolioDelete($id){
        $portfolio = Portfolio::FindOrFail($id);
        $img = $portfolio->project_img;
        unlink($img);

       Portfolio::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Portfolio Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
