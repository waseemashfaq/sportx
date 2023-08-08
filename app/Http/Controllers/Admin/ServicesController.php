<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
class ServicesController extends Controller
{
    
     public function index (){
        $alldata=Service::all();
        return view('admin.pages.services.list',compact('alldata'));
    }

     public function create(){

       return view('admin.pages.services.add');
    }


    public function store(Request $request){
        // dd( $request);
         $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return makeResponse('error', $validator->errors()->first(), 422);
        }
            $obj=new Service();
             $obj->name=$request->name;
         
             $obj->save();
            return response()->json(['result'=>'success','message' => 'new blog added Successfully'], 200);
    }

    
    public function edit($id){
       $editData=Service::where('id',$id)->first();
       return view('admin.pages.services.edit',compact('editData'));
    }
    public function update(Request $request){
        // dd( $request);
         $validator = Validator::make($request->all(), [
            'name' => 'required',
         
            // 'image' => 'required',
        ]);
        if ($validator->fails()) {
            return makeResponse('error', $validator->errors()->first(), 422);
        }
            $obj= Service::where('id',$request->id)->first();
             $obj->name=$request->name;
             $obj->save();
            return response()->json(['result'=>'success','message' => ' Service edit   Successfully'], 200);
    }
      public function destroy(Request $request)
    {
      
        $blog=Service::where('id',$request->id)->first();
        if ( $blog) {
              
             $blog->delete();
             return response()->json(['result'=>'success','message'=>'Service data deleted']);
        } else {
            return response()->json(['result'=>'error','message'=>'record not found']);
        }


    }
}
