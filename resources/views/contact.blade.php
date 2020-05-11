@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<h2 class="mx-auto text-center">Contact Us</h2>
    {{-- @foreach ($errors->all() as $error) 
    <p class="alert alert-danger">{{ $error }}</p> 
    @endforeach --}}

    @if (session('flash_message')) 
    <div class="alert alert-success"> {{ session('flash_message') }} 
    </div>
     @endif
     
 <div class="card p-3">
    <form action="{{route('contact.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="full name">Full name:</label>
            <input type="text" class="form-control" name="name">
                @if ($errors->has('name'))
                 <small class="form-text invalid-feedback" style="display: block">{{$errors->first('name')}}</small>
                @endif
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="text" class="form-control" name="email">
                @if ($errors->has('email'))
                <small class="form-text invalid-feedback" style="display: block">{{$errors->first('email')}}</small>
                @endif
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" class="form-control" name="name"></textarea>
                @if ($errors->has('message'))
                <small class="form-text invalid-feedback" style="display: block">{{$errors->first('message')}}</small>
                @endif
        </div>

        <button class="btn btn-primary btn-block">Submit</button>
    </form>           
    </div>
</div>


@endsection