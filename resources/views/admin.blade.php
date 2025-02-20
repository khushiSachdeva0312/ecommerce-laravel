@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<style>
    .conditional[data-status="user"] {
        display: none;
    }
    .conditional[data-status2="Service Provider"] {
        display: none;
    }
    /* .conditional[data-status3="user"] {
         display: none;
         } */
    .parent{
        margin: 0;
        padding: 0;
        /* position: relative; */
        display: flex;
        flex-wrap: wrap;
        height: 500px;
    }
    .sidenav{
        width: 25%;
        background-color: black;
        color: #fff;
        padding: 10px;
    }
    .sidenav a{
        padding: 10px;
        color: #fff;
    }
    .sidediv {
         display: inline-block; 
         margin-left: 30%; 
    }
</style>
{{-- <center>
    <h1>Home Page</h1>
</center> --}}
<div style="display: none">
    {{ $user = auth()->user() }}
</div>
<div class="parent">
<div class="w3-sidebar w3-black w3-bar-block sidenav" style="width:25%;height:100%;">
    <h3 class="w3-bar-item">{{$user->role}} Menu</h3>
    <div>
        <a href="{{route('home')}}" class="w3-bar-item w3-button">Home</a>
    </div>
    <div class="conditional" data-status='{{ $user->role }}' data-status2='{{ $user->role }}'>
        <a href="{{route('provider')}}" class="w3-bar-item w3-button">Add service Provider</a>
    </div>
    <div class="conditional" data-status='{{ $user->role }}' data-status2='{{ $user->role }}'>
        <a href="{{route('viewProvider')}}" class="w3-bar-item w3-button">View service Provider</a>
    </div>
    <div class="conditional" data-status='{{ $user->role }}'>
        <a href="{{route('addItem')}}" class="w3-bar-item w3-button">Add item</a>
    </div>
</div>
<div class='sidediv'>
{{-- {{$user}} --}}
    
    <center>
        <h1>{{$user->role}}</h1>
    </center>
    <table class="table table-striped">
        <tr >
            <th>Id</th>
            {{-- <th>Parent Id</th> --}}
            <th>name</th>
            <th>Email</th>
            <th>Role</th>
            {{-- <th>Password</th> --}}
        </tr>
        {{-- @foreach($data as $user) --}}
        <tr>
            <td>{{$user->id}}</td>
            {{-- <td>{{$user->parent_id}}</td> --}}
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            {{-- <td>{{$user->password}}</td> --}}
        </tr>
        {{-- @endforeach --}}
    </table>


<br/>
    <center>
        <h1>Products Added By {{$user->name}}</h1>
    </center>
    <table class="table table-striped">
        <tr >
            <th>Id</th>
            {{-- <th>Parent Id</th> --}}
            <th>title</th>
            <th>Discription</th>
            <th>current price</th>
            <th>sale prize</th>
            <th>Image</th>
            <th>Product Group</th>

            {{-- <th>Password</th> --}}
        </tr>
        @foreach($item as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->title}}</td>
            <td>{{$user->description}}</td>
            {{-- <td>{{$user->image_path}}</td> --}}
            <td>{{$user->current_price}}</td>
            <td>{{$user->selling_price}}</td>
            <td>
                <a href="{{ asset('storage/' . $user->image_path) }}">
                    <img src="{{ asset('storage/' . $user->image_path) }}" height="50" width="50" alt='item'>
                </a>
            </td>
            <td>{{$user->group}}</td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection