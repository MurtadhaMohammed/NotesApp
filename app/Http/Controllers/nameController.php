<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use App\Name;

class nameController extends Controller
{
    public function getAll(){
		$allnames=DB::table('names')->get();
    	return view('welcome',compact('allnames'));
	}
    public function All(){
        $all=DB::table('names')->get();
        //return Response::json($all);
        return  view('all',compact('all'));
    }
   public function store(Request $request){
         //$this->layout = null;
        //if(Request::ajax()){
           // $fname = Input::get( 'fname' );
            //$lname = Input::get( 'lname' );

             $names=new Name;
             $names->fname=$request->fname;
             $names->lname=$request->lname;
             $names->save();
             return back();

           /* $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
            return 'yea';
        }else{
            return 'no';
        }*/
       // return $request->lname;
    }

       public function delete(Name $name)
       {
        if(count($name)>0 && count($name)<2)
        {
              $name->delete();
              //return back();
          //  return view('delete',compact('name'));
        }
          
       }
}
