@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jQuery.js"></script>
    <style>
        body{
            background-color: bisque;
        }
        #myform{
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <form class="col-sm-4" action="{{route('registerUser')}}" method="post" id="myform" enctype="multipart/form-data">
                @csrf
                <div class="mt-5 p-3">
                    <h1>User SignUp</h1>
                </div>
                {{-- <div>
                    <label for="parent_id" class="form-label">Parent Id:</label>
                    <input type="number" readonly class ="form-control" id="parent_id" name="parent_id" value="{{auth()->user()->id}}">
                </div> --}}
                {{-- <div>
                    <label for="role" class="form-label">Role:</label>
                    <input type="text" readonly class="form-control" id="role" name="role" value="{{$role}}">
                </div> --}}
                <div>
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div>
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div>
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                {{-- <div>
                    <label for="profile_pic" class="form-label">Profile Pic:</label>
                    <input type="file" class="form-control" id="profile_pic" name="profile_pic">
                </div> --}}
                <div id="d2">
                    <button type="submit" class="btn btn-primary mt-3 mb-5" id="btnadd" name="submit">
                        Save
                    </button>
                    {{-- <a href="/view-page"><button  type="button"  class="btn btn-success updatebtn"> view </button></a>
                </div> --}}
            </form>
        </div>
    </div>
</body>
</html>
@endsection