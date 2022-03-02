<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('sidebar')
<title> Confirmation </title>

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
                                                <center><hr> <h1 class="day-4">Change Status  </h1>  </center>
                                                <hr>
                                                <center>
                                                <p class="mt-5 login-form__footer"> Confirm Change Status of this User ?
                                                 </p>
                                               
                                                <br>
                                                <a href="/userlist"> <input type="button" value="Decline" class="btn_danger">
                                                 </a>
                                                <br>
                                                <br>
                                                <input type="submit" value="Change" class="btn">
                                               
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</center>

