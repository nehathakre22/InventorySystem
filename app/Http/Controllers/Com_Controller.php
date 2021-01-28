<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
//use DB;

class Com_Controller extends Controller
{
     
	 
    public function try()
    {
        return view('try');
    }



    public function company()
    {
        $data['com']=Company::get();
        return view('company',$data);
    }





    //  public function company()
    // {
    // 	$data = DB::table('companies')->get();

    // 	return view('company', ['data'=>$data]);
    // }



     public function store2(Request $request)
    {
    	$com= new Company();

    		$com->name=$request->name;
    		$com->email=$request->email;
            $com->contact=$request->contact;
            $com->address=$request->address;
    		$com->save();
    		return redirect('company');
    		// print_r($request->all());
    		//  die();
    }


	public function delete_company($id){

		$delete =Company::where('id',$id)->get()->first();
		$del=$delete->delete();
		if($del){
			return redirect('company');
		}

        //print_r($del);
	}

    public function update($id)
    {
        $fetch['data']=Company::where('id',$id)->get()->first();
        return view('edit_company',$fetch);
    }

    public function update_company(Request $request)
    {
        $update = Company::where('id',$request->id)->get()->first();

        $update->name=$request->name;
        $update->email=$request->email;
        $update->contact=$request->contact;
        $update->address=$request->address;

        $update->update();
        return redirect('company');
    }
}
