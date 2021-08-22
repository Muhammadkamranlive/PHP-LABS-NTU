<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
class employeeController extends Controller
{
    //
    public  function Getemployee(){
        $arrayOfEmployees=employee::all();
        return view ('Employee',compact('arrayOfEmployees',$arrayOfEmployees));
    }
    public  function Deleteemplyee($id){

        employee::destroy($id);
        return redirect('/');
    }
    public  function Createmployee(Request $request){
        $objectemployee= new employee();
        $objectemployee['Employeename']=$request->input('name');
        $objectemployee['Designation']=$request->input('designation');
        $objectemployee['Salary']=$request->input('salary');
        $objectemployee['Department']=$request->input('department');
        $objectemployee->save();
        return redirect('/');
    }
}
