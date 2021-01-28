<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;


class Prod_Controller extends Controller
{

    public function product()
    {
    	$data['prod']=Products::get();
    	return view('product/product',$data);
    }

    // public function product()
    // {
    //     $data = DB::table('products')->get();

    //     return view('product/product', ['data'=>$data]);
    // }
    
    public function reports()
    {
        // $report1 = DB::table('products')->where('date_and_time',today())->get();
            
        //return view('reports', ['report1'=>$report1]);
        $report1 = DB::table('products')->get();
                //->where('date_and_time')->get();
                //dd($report1);
                return view('reports', ['report1'=>$report1]);
    }

    public function store1(Request $request)
    {

    	$pro = new Products();

    	$pro->name=$request->name;
    	$pro->category=$request->category;
    	$pro->colour=$request->colour;
    	$pro->size=$request->size;
    	$pro->weight=$request->weight;
    	$pro->quantity=$request->quantity;
    	$pro->brand=$request->brand;
    	$pro->avability=$request->avability;
    	$pro->price=$request->price;
        $pro->remark=$request->remark;
    	$pro->date_and_time=$request->date_and_time;
        $pro->delivery_date=$request->delivery_date;

    	$pro->save();

    	return redirect('product');
    }


    public function delete_field($id)
    {
    	$delete =Products::where('id',$id)->get()->first();
		$del=$delete->delete();
		if($del){
			return redirect("product");
		}
    }

    public function update($id)
    {
    	$fetch['data']=Products::where('id',$id)->get()->first();
		return view('product/update',$fetch);
    }

    public function update_field(Request $request)
    {
        // $user = Products::where('id',$request->id)->get()->first();
        // $user1 = $user[0]->quantity - $request->return;
        //$value = $request->return;

    	$update = Products::where('id',$request->id)->get()->first();

        $update->name=$request->name;
        $update->category=$request->category;
        $update->colour=$request->colour;
        $update->size=$request->size;
        $update->weight=$request->weight;
        // $update->quantity=$request->quantity;
        
        // $update->return=$request->return;
        $minus = $request->quantity - $request->return;
        $update->quantity = $minus;
        $update->return=$request->return;
        
        $update->brand=$request->brand;
        $update->avability=$request->avability;
        $update->price=$request->price;
        $update->remark=$request->remark;
        $update->date_and_time=$request->date_and_time;
        $update->delivery_date=$request->delivery_date;


        $update->update();
        return redirect('product');
    }

    public function report_such(Request $request)
    {
        $from_date = $request->get('from_date');
        $to_date = $request->get('to_date');

        $report1 = DB::table('products')
            ->whereBetween('date_and_time', [$from_date, $to_date])->get();
        return view('reports', ['report1'=>$report1]);
    }
}