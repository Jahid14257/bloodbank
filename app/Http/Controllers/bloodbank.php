<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_bank;
use App\Models\bloodcllection;
use App\Models\user;

class bloodbank extends Controller
{
    function bank(Request $request){
         _bank:: forceCreate([
            'bank_name'=>$request->bank_name,
            'log'=>$request->log,
            'address'=>$request->address

         ]);
        /*$bank->bank_name= $request->post(bank_name);
        $bank->log= $request->post(log);
        $bank->address= $request->post(addresse);*/
        
    } 
    function bloodcllection(Request $request){
        bloodcllection:: forceCreate([
           'donor_name'=>$request->donor_name,
           'donor_grup'=>$request->donor_grup,
           'bank_id'=>$request->bank_id,
           'cllection_date'=>$request->cllection_date,
           'status'=>$request->status


        ]);
       /* $bloodcllection->donor_name= $request->post(donor_name);
        $bloodcllection->donor_grup= $request->post(donor_grup);
        $bloodcllection->bank_id= $request->post(bank_id);
        $bloodcllection->cllection_date= $request->post(cllection_date);
        $bloodcllection->status= $request->post(status);*/
        
    } 
    function user(Request $request){
    
        user :: forceCreate([
            'name'=>$request->name,
            'grup'=>$request->grup,
            'number'=>$request->number,
            'password'=>$request->password,
            'address'=>$request->addres
        ]);
       /* $user=new user;
        $user->name= 
        $user->Grup= $request->post('grup');
        $user->number= $request->post('number');
        $user->password= $request->post('password');
        $user->address= $request->post('address');*/   
    } 
    function viewallbank(){
        $allbank=_bank::all();
        return $allbank;
    }
    function viewalluser(){
        $alluser=user::all();
        return $alluser;
    }

}
    