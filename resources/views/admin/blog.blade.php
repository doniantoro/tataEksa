@extends('layouts/master_admin')

@section('content')
<div class="container p-4">
    <center>
    <h3><strong>Your Published blog </strong></h3>
    
    </center>
    <div class="row" style="margin-top:60px;">
        <div class="col-lg-6">
    </div>
        <div class="col-lg-6 d-flex flex-row-reverse">
            
        <button type="button" class="btn btn-outline-danger ml-4 "><h6>Add blog</h6></button>
      
<input id="myInput" type="text" placeholder="Search..">
        </div>
    </div>
    <hr>
    <div class="row pt-4">
    <div class="col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="https://miro.medium.com/max/750/0*snHJpgEnGCPzD-ck.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Edit</a>
                    <a href="#" class="card-link">Delete</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="https://miro.medium.com/max/750/0*snHJpgEnGCPzD-ck.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Edit</a>
                    <a href="#" class="card-link">Delete</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="https://miro.medium.com/max/750/0*snHJpgEnGCPzD-ck.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Edit</a>
                    <a href="#" class="card-link">Delete</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="https://miro.medium.com/max/750/0*snHJpgEnGCPzD-ck.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Edit</a>
                    <a href="#" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    
    </div>
    
</div>

@endsection