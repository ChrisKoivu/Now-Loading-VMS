
<!-- index.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        <br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        
        @foreach($volunteers as $volunteer)
          
           <!-- do something here -->
        @endforeach
       
    </div>
  @endsection