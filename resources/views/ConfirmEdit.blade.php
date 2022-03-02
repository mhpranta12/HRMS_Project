<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('sidebar')
<title> Confirmation </title>
@include('header')

<style>
       .bg
{
    background-color:rgb(242, 242, 248);
    align:"center";
} 
.btn
{
    background-color:rgb(2, 128, 237);
    opacity: 0.9;
    align:"center";
    width:120px;
    height:35px;
    border-radius: 10px;
} 
.btn:hover
{
   
    opacity: 2;
    
} 
.btn_danger
{
    background-color:rgb(219, 88, 86);
    opacity: 0.9;
    align:"center";
    width:120px;
    height:35px;
    border-radius: 10px;
} 
.btn_danger:hover
{
    
    opacity: 2;
    align:"center";
  
} 
        </style>
         <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                            <form method="POST" class="mt-5 mb-5 login-input">
                                                @csrf
                                                <center><hr> <h1 class="day-4"> Edit User  </h1>  </center>
                                                <hr>
                                                <center>
                                               
                                                
                                                <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                                                <br>
                                                <input type="text" name="id" class="form-control form-control-sm" aria-describedby="emailHelp"value="{{$userlist['id']}}"> </input>
                                                <br>
                                               
                                             First Name
                                                <br>
                                                <input type="text" name="firstname" class="form-control form-control-sm" aria-describedby="emailHelp"value="{{$userlist['firstname']}}"> </input>    
                                                <br>
                                                
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>   
                                                <br>
                                                <input type="text" name="email" class="form-control form-control-sm" aria-describedby="emailHelp"value="{{$userlist['email']}}"> </input>
                                                <br>
                                               
                                              Password
                                                <br>
                                                <input type="text"name="password"class="form-control form-control-sm" aria-describedby="emailHelp" value="{{$userlist['password']}}"> </input>
                                                <br>
                                               
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>   
                                                <br>
                                                <select name="status" class="form-control" id="status">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                                </select>
                                                <br>
                                               
                                                <a href="/userlist"> <input type="submit" value="Edit" class="btn btn-primary btn-lg btn-block">
                                                 </a>
                                                <br>
                                               
                                               
                                               
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</center>

