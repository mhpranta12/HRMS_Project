<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Validator;

class AdminController extends Controller
{
    //
    
    public function dashboard()
    {
        return view ("dashboard");
    }
    public function adminloginVerify(Request $rq)
    {
        if ($rq->email == 'admin@gmail.com' && $rq->password == '12345678')
        {
            $rq->session()->put('user_name', 'admin');
            return redirect("/dashboard");
        }
        else
        return redirect("/login");
     
    }
    public function createUser(Request $rq)
    {
        $error=false;
        $validation=Validator::make($rq->all(),
        [
            
            'uname'=> 'required|min:4|max:10' ,
            'password'=> 'required|min:8|max:25',
            'email'=>'required|min:4'
        ]
        );
        $validationemail=Validator::make($rq->all(),
        [
           
            'email'=>'email:rfc,dns'
        ]
        );
        $firstname=$rq->uname;
        $split_user =str_split($firstname,1)   ;
        if(ctype_alnum($firstname)||  ctype_alnum($firstname) || in_array('_',$firstname) || in_array('-',$firstname) || in_array('.',$firstname)==false )
        {
           
        }
        else
        {
            echo "First Name Rules Violation  <br>";
            $error=true;
        }
         
        if($validation->fails() || $validationemail->fails())
        {
           
            $error=true;

        }
        if ($error)
        {
            echo "Validations failed";
        }
        else
        {
            $user = new user;
            $user->firstname=$rq->uname;
            $user->email=$rq->email;
            $user->password=bcrypt($rq->password);
            $user->status='active';

            
          
           $user->save();
           $users = user::all();
       
       
           return view('userList')->with('userlist',$users); 
        }
    }
    public function getAllUsers()
    {
           $user = new user;
           $users = user::all();

           return view('userList')->with('userlist',$users); 
    }
    
    public function getBlockUser($id)
    {
        $users= user::where('id',$id)
        ->first() ;
        return view('confirmBlock')->with('userlist',$users); 
    }

    public function BlockUser(Request $rq)
    {
        $found= user::where('id',$rq->id)
        ->first();
        if($found)
        {
            if($found->status== 'inactive')
            {
                $found->status= 'active';
                $found->save();
                return redirect("/userlist");
            }
           
            else if ($found->status =='active')
            {
                $found->status= 'inactive';
                $found->save();
                return redirect("/userlist");
            }
        }
        else
        {
                echo "User not found";
        }
                 
    }

    public function getDeleteUser($id)
    {
        $users= user::where('id',$id)
        ->first() ;
        return view('confirmDelete')->with('userlist',$users); 
    }

    public function DeleteUser(Request $rq)
    {
        $found= user::where('id',$rq->id)
        ->first();
        if($found)
        {
            
               
                $found->delete();
                return redirect("/userlist");
            
        }
        else
        {
                echo "User not found";
        }
                 
    }
    
    public function getEditUser($id)
    {
        $users= user::where('id',$id)
        ->first() ;
        return view('confirmEdit')->with('userlist',$users); 
    }

    public function EditUser(Request $rq)
    {
        $found= user::where('id',$rq->id)
        ->first();
        if($found)
        {
                $found->id=$rq->id;
                $found->firstname=$rq->firstname;
                $found->email=$rq->email;
                $found->status=$rq->status;

                $found->save();
                return redirect("/userlist");
            
        }
        else
        {
                echo "User not found";
        }
                 
    }
}
