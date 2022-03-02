<link rel="stylesheet" href="{{asset('style.css')}}"/>
<title> Admin Login </title>
@include('header')

@include('sidebar')
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
                                                <center><hr> <h1 class="card-title"> Login  </h1>  </center>
                                                <hr>
                                                <center>
                                                  Email 
                                                    <br>
                                                <input type="email" name="email"> </input>
                                                <br>
                                                <br>
                                                Password
                                                <br>
                                                <input type="password"name="password"> </input>
                                                <br>
                                                <br>
                                                <br>
                                                <input type="submit" value="Sign in" class="btn login-form__btn submit w-100 ">
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

