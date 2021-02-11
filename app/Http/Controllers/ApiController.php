<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Collection;


class ApiController extends Controller
{
    //
    public function getAllVisiters()    {
        // $visitor = DB::table('Visitor')->where('tempreture', $temp)->first();
        // error_log($visitor);
       $temp = 98.6;
        $visitors = Visitor::all();

    foreach($visitors as $visitor) { 
        if($temp < $visitor->tempreture){
            echo $visitor;
        }
    }
    }
    public function createVisiter(Request $request)     {
        $visiter = new Visitor;
        $visiter->name = $request->name;
        $visiter->national_id = $request->national_id;
        $visiter->tempreture = $request->tempreture;
        $visiter->phone = $request->phone;
        $visiter->reason = $request->reason;
        $visiter->save();

        // return $response()->json(["Message" => "Stdent Record Created"], 201);
        return response("Record Entered");
    }
    public function getVisiter($temp)    {
        // if(Visiter::where('tempreture', $temp >= 96.8)->exists()){
        //     $visiter = Visiter::findOrFail($temp);
        //     return $temp;
                
        // }else{
        //      return response("The ID is not Vallid");
        // }



    }
    

}
