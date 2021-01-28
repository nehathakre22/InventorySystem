<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories_s;
use App\Products;
use App\Company;
use App\Admin;
use DB;

class Cat_Controller extends Controller
{
    public function index()
    {
       // $wordlist = Categories_s::get();
        $wordCount['wordCount'] = Categories_s::get()->count();
        $wordCount['product'] = Products::get()->count();
        $wordCount['company'] = Company::get()->count();
        $wordCount['report'] = Products::get()->count();
    	// print_r($wordCount);
     //    die();
        return view('dashboard1',$wordCount);
    }

    public function category()
    {
    	$data['cat'] = Categories_s::get();
    	return view('category/category',$data);
    }

    public function store(Request $request)
    {
    	$cat= new Categories_s();

    		$cat->brand=$request->brand;
    		$cat->category=$request->category;
            $cat->attr=$request->attr;
    		$cat->save();
    		return redirect('category');
    		// print_r($request->all());
    		//  die();
    }

    public function delete($id){

		$delete =Categories_s::where('id',$id)->get()->first();
		$del=$delete->delete();
		if($del){
			return redirect("category");
		}
	}

	public function update($id)
	{
		$fetch['data']=Categories_s::where('id',$id)->get()->first();
		return view('category/edit',$fetch);
	}

    public function update_data(Request $request)
    {
        $update = Categories_s::where('id',$request->id)->get()->first();

        $update->brand=$request->brand;
        $update->category=$request->category;
        $update->attr=$request->attr;

        $update->update();
        return redirect('category');
    }


    public function login()
    {
        return view('login_admin');
    }

    public function login_new_admin(Request $request){


                  $login = Admin::where('username',$request->username)->where('password',$request->password)->get()->first();

                    if($login){
                        
                        //Session()->flash("success","Data Has Been Insert");
                        return redirect('dashboard1');
                    }else{

                       return Redirect("login_admin")->withFail('unsccessfully login');
                       //return redirect('login_admin');
                    }

            }
}
