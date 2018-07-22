<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        
        
        @auth

        <h3>Administrator Panel</h3>
        <hr>
        <h5>Volunteers</h5>
       
        @if (count($volunteers))
        <table id ="volunteers">          
          <tr><th>Name</th><th>Status</th><th>Email</th><th>Home Phone</th><th>Work Phone</th><th>Cell Phone</th><th>Action</th></tr>
        @foreach($volunteers as $volunteer)
          <tr><td>{{$volunteer->first_name . ' '}} {{$volunteer->last_name}}</td>
          <td>{{$volunteer->status}}</td><td>{{$volunteer->email}}</td>
          <td>{{$volunteer->home_phone}} </td><td>{{$volunteer->work_phone}} </td>
          <td>{{$volunteer->cell_phone}} </td>
          <td>
            <a href="{{action('VolunteersController@edit', $volunteer->id)}}" class="btn btn-warning">Edit</a>
        </td>
          </tr>        
        @endforeach
        </table>    
       @else
         <?php echo 'No volunteer records found'; ?>
       @endif
        
        @endauth

    </div>
@endsection