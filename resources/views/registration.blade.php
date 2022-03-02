<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('sidebar')
<title> Registration </title>
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
         <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                            <form method="POST" class="mt-5 mb-5 login-input">
                                                @csrf
                                                <center><hr> <h1 class="day-4"> Registration <hr> </h1>  </center>
                                               
                                                <center>
                                                First Name 
                                                <br>
                                                <input type="text" name="uname" class="form-control form-control-sm"> </input>    
                                                <br>
                                                <br>
                                                Email
                                                <br>
                                                <input type="text" name="email" class="form-control form-control-sm"> </input>
                                                <br>
                                                <br>
                                               Password
                                                <br>
                                                <input type="password"name="password" class="form-control form-control-sm"> </input>
                                                <br>
                                                <br>
                                                <input type="submit" value="Register" class="btn login-form__btn submit w-100 ">
                                                <p class="mt-5 login-form__footer"> have account? 
                                                <a href="/login" class="text-primary">Sign In</a> now
                                </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</center>

