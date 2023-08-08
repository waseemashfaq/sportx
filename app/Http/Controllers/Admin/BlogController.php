<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index (){
        $allBolg=Blog::all();
        return view('admin.pages.blog.list',compact('allBolg'));
    }

     public function create(){
       return view('admin.pages.blog.add');
    }


    public function store(Request $request){
        // dd( $request);
         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'detail' => 'required',
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return makeResponse('error', $validator->errors()->first(), 422);
        }
            $obj=new Blog();
             $obj->title=$request->title;
             $obj->detail=$request->detail;
            if(isset($request->image)){
                $destinationPath='Uploadimage/blog';
                if (!file_exists('Uploadimage/blog')) {
                    mkdir('Uploadimage/blog',0777,true);
                }
                $file=$request->file("image");
                $extension=$file->getClientOriginalName();
                $filename=time().'.'.$extension;
                $request->image->move(public_path('Uploadimage/blog'),$filename);
                $obj->image=$destinationPath.'/'.$filename;
            }
             $obj->save();
            return response()->json(['result'=>'success','message' => 'new blog added Successfully'], 200);
    }

    
    public function edit($id){
       $bolgData=Blog::where('id',$id)->first();
       return view('admin.pages.blog.edit',compact('bolgData'));
    }
    public function update(Request $request){
        // dd( $request);
         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'detail' => 'required',
            // 'image' => 'required',
        ]);
        if ($validator->fails()) {
            return makeResponse('error', $validator->errors()->first(), 422);
        }
            $obj= Blog::where('id',$request->id)->first();
             $obj->title=$request->title;
             $obj->detail=$request->detail;
            if(isset($request->image)){
                $old_pth= $obj->image;
                $destinationPath='Uploadimage/blog';
                if (!file_exists('Uploadimage/blog')) {
                    mkdir('Uploadimage/blog',0777,true);
                }
                $file=$request->file("image");
                $extension=$file->getClientOriginalName();
                $filename=time().'.'.$extension;
                $request->image->move(public_path('Uploadimage/blog'),$filename);
                $obj->image=$destinationPath.'/'.$filename;
                file::delete($old_pth);
                
            }
             $obj->save();
            return response()->json(['result'=>'success','message' => ' blog edit   Successfully'], 200);
    }
      public function destroy(Request $request)
    {
      
        $blog=Blog::where('id',$request->id)->first();
        if ( $blog) {
                file::delete($blog->image);
             $blog->delete();
             return response()->json(['result'=>'success','message'=>'blog data deleted']);
        } else {
            return response()->json(['result'=>'error','message'=>'record not found']);
        }


    }

    
    

}
