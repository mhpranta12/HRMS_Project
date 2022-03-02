<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\contact;
use App\Imports\ContactImport;

use Excel;

class UserController extends Controller
{
    public function login ()
    {
        return view ("login");
    }
    public function userlogin ()
    {
        return view ("login_user");
    }
    public function loginVerify(Request $rq)
    {

            $found= user::where('email',$rq->email)
            ->where('status','active')
            ->first();
           
        //checking users
        if($found)
        {
                    if (Hash::check($rq->password, $found['password']))
                    {
                        $rq->session()->put('status', true);
                        $rq->session()->put('user_name', array($found['firstname']));
                        $rq->session()->put('user_id', array($found['id']));
                        $rq->session()->put('user_status', array($found['status']));
                        return redirect("/user/dashboard");
                    } 
                    else 
                    {
                    $rq->session()->flash('msg', 'Invaild User Name or password');
                    return redirect("/user/login");
                    }
                
        }
            
        else 
        {
            $rq->session()->flash('msg', 'Invaild User Name or password');
            return redirect("/user/login");
        }
    
    }
    public function getAllContacts()
    {
           $contacts = new contact;
           $contacts = contact::all();

           return view('dataList')->with('contactlist',$contacts); 
    }
    public function registration()
    {
        return view ("registration");
    }

    public function logout(Request $rq)
    {
        $rq->session()->flush();
        return redirect("/");
    }
    public function fileUpload(Request $rq)
    {
    
                $data= Excel ::import (new ContactImport,$rq->file);
                if ($data)
                {
                    return redirect("/user/contactlist");
                }
              
    }
    
}
