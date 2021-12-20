@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header"><strong>My Profile</strong></div>
                <div class="card" style="background-color:rgb(240, 246, 247); border-color:rgb(248, 248, 248);">
                  <img class="card-img-top" src="holder.js/100x180/" alt="">
                  <div class="card-body">
                  </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <p><strong>Name:</strong> {{Auth::user()->name}}</p>
                        <p><strong>Email:</strong> {{Auth::user()->email}}</p>
                        <p><strong>Phone:</strong> {{Auth::user()->phone}}</p>  
                        <p><strong>address:</strong> {{Auth::user()->address}}</p>
                        
                        <p> 
                            @if (Auth::user(0)->chackisAdmin(1))
                            <a href="{{route('product')}}"class = "btn btn-primary">Product Management</a>
                            @endif
                       
                        <a href="/"class = "btn btn-success">Home</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
