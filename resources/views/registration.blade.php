@extends('layout')

@section('title', 'Registration')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="mt-5">
        @if ($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div> 
        @endif
           
        @if(session()->has('success')) // seession is method in the laravel 
            <div class="alert alert-success">{{ session('success') }}</div> 
        @endif
    </div>
    <form action="{{route('registration.post')}}" method="POST" class="w-100" style="max-width: 500px;">
        @csrf
        <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>
@endsection
