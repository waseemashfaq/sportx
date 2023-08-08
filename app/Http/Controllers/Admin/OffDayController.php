<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\OffDay;
use Carbon\Carbon;

class OffDayController extends Controller
{
     
     public function index (){
        $alldata=OffDay::all();
        return view('admin.pages.offdate.list',compact('alldata'));
    }

     public function create(){

       return view('admin.pages.offdate.add');
    }


    public function store(Request $request){
        // dd( $request);
         $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        if ($validator->fails()) {
            return makeResponse('error', $validator->errors()->first(), 422);
        }

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);

        // Get dates between start and end dates (including start and end dates)
        // $datesBetween = [];
        // while ($startDate <= $endDate) {
        //        $datesBetween[] = $startDate->toDateString();
        //        $startDate->addDay();
        //    }
        // dd($datesBetween);


            $obj=new OffDay();
             $obj->start_date=$request->start_date;
             $obj->end_date=$request->end_date;
         
             $obj->save();
            return response()->json(['result'=>'success','message' => 'new blog added Successfully'], 200);
    }

      public function destroy(Request $request)
    {
      
        $blog=OffDay::where('id',$request->id)->first();
        if ( $blog) {
              
             $blog->delete();
             return response()->json(['result'=>'success','message'=>'Service data deleted']);
        } else {
            return response()->json(['result'=>'error','message'=>'record not found']);
        }


    }
}
