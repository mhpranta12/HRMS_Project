<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('sidebar_unlog')
<title> Home </title>
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
                                               
                                                <center> <hr><h1 class="day-4"> Home  </h1>  </center>
                                                <hr>
                                                
                                                <a href="/login">   <input type="button" value="Sign in (Admin)" class="btn login-form__btn submit w-100 ">
                                                </a>
                                                <br> <br> <br>
                                                <a href="/user/login">   <input type="button" value="Sign in (User)" class="btn login-form__btn submit w-100 ">
                                                </a>
                                                <br> <br> <br>
                                           
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</center>

