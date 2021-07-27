@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="{{route('login.store')}}" method="POST" class="row g-3">
                        <h4 style="text-align:center;">Bienvenido</h4>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        
                        <div class="col-12">
                            @csrf
                            <button type="submit" class="btn btn-dark float-end">Login</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection
