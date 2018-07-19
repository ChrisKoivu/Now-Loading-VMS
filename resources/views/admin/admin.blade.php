<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        <br />
        
        @auth
            <!-- The user is authenticated... -->
        @endauth

    </div>
@endsection