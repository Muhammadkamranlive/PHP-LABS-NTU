<?php

namespace App\Http\Controllers;

use App\Models\dep;
use App\Models\emp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mycontroller extends Controller
{
    //

    public  function insert(Request  $request){
         $obj= new emp();
         $obj['firstName']=$request->input('firstname');
         $obj['lastname']=$request->input('lastname');
         $obj['HireDate']=$request->input('hiredate');
         $obj['manager']=$request->input('manager');
         $obj['depid']=$request->input('depid');
         $obj->save();
         echo "data is saved";
    }
    public  function display(){
        $array1=dep::all();
        return view('home',compact('array1',$array1));
    }
    public  function displayEmploye(){
        $data=emp::all();
        $data2=dep::all();
        return view('employee',compact('data',$data,'data2',$data2));
    }
    public function del($id){
        emp::destroy($id);
        echo 'delted';
    }
    public function dp($id){
        dep::where('depid',$id)->delete();
        echo "del";
    }
}
