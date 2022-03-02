<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('style.css')}}"/>
    <style>
        .bg
        {
            background-color:rgb(36, 223, 240);
			align:"center";
        } 
    </style>       
@include('sidebar_user')
@include('header')

<title> Contact List </title>
<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        
    </div>
</div>
<!-- row -->
<center> <h1 class="day-3">Contact Lists</h4>  </center>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <hr> <h4 class="card-title">Contact Lists</h4><hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                           

                            <tr>
                                <td class='bg'> First Name  </td> 
                                <td class='bg'> Last Name </td> 
                                <td class='bg'> Email </td> 
                                <td class='bg'> Phone Number</td> 
                                <td class='bg'> State </td>  
                                <td class='bg'>  ZIP </td>  

                            </tr>
                         
                            @foreach ($contactlist as $users) 
    
                        <tr>
                              
                                <td> {{$users['firstname']}} </td>
                                <td> {{$users['lastname']}} </td> 
                                <td> {{$users['email']}} </td>
                                <td> {{$users['number']}} </td> 
                                <td> {{$users['state']}} </td> 
                                <td> {{$users['zip']}} </td> 

                                @endforeach
                          
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </htmnl>