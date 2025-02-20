@extends('layouts.app')

@section('content')
<div class="container">
<center>
<h1>Service Provider List</h1>
<table class="table table-striped">
    <tr >
        <th>Id</th>
        <th>Parent Id</th>
        <th>name</th>
        <th>Email</th>
        <th>Role</th>
        {{-- <th>Password</th> --}}
    </tr>
    @foreach($data as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->parent_id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        {{-- <td>{{$user->password}}</td> --}}
    </tr>
    @endforeach
</table>
</center>
</div>
@endsection