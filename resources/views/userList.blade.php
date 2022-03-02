<!DOCTYPE html>
@include('sidebar')
@include('header')

<link rel="stylesheet" href="{{asset('style.css')}}"/>
<style>
.bg
{
    background-color:rgb(36, 223, 240);
    align:"center";
}
.btn2
{
    background-color:rgb(86, 158, 79);
    opacity: 0.8;
    align:"center";
  
    width:110px;
    height:35px;
    border-radius: 10px;
} 
.btn2:hover
{
   
    opacity: 2;
    
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
    background-color:rgb(219, 76, 57);
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

<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">User List <hr> </a></li>
        </ol>
    </div>
</div>

<!-- row -->
<center> <h1 class="day-3">User Lists</h4>  <hr></center>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>

                            <tr>
                                <th scope="row" class="bg"> ID </th> 
                                <th scope="row" class="bg"> Name </th>
                                <th scope="row" class="bg">Email </th>
                                <th scope="row" class="bg">Status </th>
                                <th scope="row" class="bg"> Operations </th>
                            </tr>
                            @foreach ($userlist as $users) 
    
                        <tr>
                                <td> {{$users['id']}} </td> 
                                <td> {{$users['firstname']}} </td>
                                <td> {{$users['email']}} </td>
                                <td> @if($users['status']=='active')
                                <font color="green"> {{$users['status']}} </font>
                                @else
                                <font color="red"> {{$users['status']}} </font> 
                               
                                 @endif</td> </td> 
                                <td> 
                                @if($users['status']=='active')    
                                <a href="user/block/{{$users['id']}}">  
                                     <input type="submit" class="btn btn-outline-danger" value="block" >
                                </a> 
                                @else
                                <a href="user/block/{{$users['id']}}">  
                                     <input type="submit" class="btn btn-outline-success" value="Unblock" >
                                </a> 
                                @endif
                                     <a href="user/edit/{{$users['id']}}">  
                                     <input type="submit" class="btn btn-outline-light" value="Edit" >
                                    </a>
                                     <a href="user/delete/{{$users['id']}}">  
                                     <input type="submit" class="btn btn-outline-danger" value="Delete" >
                                    </a>
                                    </td>
                        </tr>

                                @endforeach
                            </tfoot>
                                    </table>
                                    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </htmnl>