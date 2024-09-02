@extends('layout')

@section('title','Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form  action="{{route('login.post')}}" method="POST" class="w-100"  style="max-width: 500px;">
    @csrf   
       
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email"  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control"  name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>
@endsection
