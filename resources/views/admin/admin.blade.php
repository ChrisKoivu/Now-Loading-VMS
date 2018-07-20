<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        <br />
        
        @auth
            <!-- The user is authenticated... -->
            <h4>Administrator Panel</h4>
            <h2>Volunteers</h2>
            @if (count($volunteers) > 0)
                @foreach($volunteers as $volunteer)
            
                    <!-- do something here -->
                    <p>{{$volunteer['first_name']  . ' '}} {{$volunteer['last_name']}}</p>
                    
                @endforeach
            @else
                <?php echo 'No volunteer records found'; ?>
            @endif
        @endauth

    </div>
@endsection