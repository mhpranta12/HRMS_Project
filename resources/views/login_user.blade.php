<!DOCTYPE html>
<html class="h-100" lang="en">
<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('sidebar_unlog')
<title> Login </title>
@include('header')

<style>
        .bg
        {
            background-color:rgb(242, 242, 248);
			align:"center";
        } 
		.btn
        {
            background-color:rgb(206, 206, 252);
			align:"center";
			width:200px;
        } 
        </style>
        <body class="h-100">

        <div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>

    </div>
         <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                            <form method="POST" class="mt-5 mb-5 login-input">
                                                @csrf
                                                <center> <hr><h1 class="day-4"> Login (User) </h1>  </center>
                                                <hr>
                                                <center>
                                                  Email 
                                                    <br>
                                                <input type="email" class="form-control form-control-sm" aria-describedby="emailHelp" name="email"> </input>
                                                <br>
                                                <br>
                                                Password
                                                <br>
                                                <input type="password"name="password" class="form-control form-control-sm" aria-describedby="emailHelp"> </input>
                                                <br>
                                                <br>
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                Remember Me
                                                <br>
                                                <br>
                                                <input type="submit" value="Sign in" class="btn btn-primary btn-lg btn-block">
                                              
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<font color="red"> {{session('msg')}} </font>
</center>
    </body>
    </html>

