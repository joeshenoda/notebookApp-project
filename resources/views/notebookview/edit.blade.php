@extends('layouts.base');
@section('content')
    <div class="container">
        <h1> create notebooks </h1>
        <form action="/notebooks/{{$notebook->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">notebook name</label>
                <input class="form-control" type="text"  name="name" value="{{$notebook->name}}" placeholder="enter name">
               <!-- <label for="name">notebook user_id</label>
                <input class="form-control" type="text" name="user_id"  value="{{$notebook->user_id}}" placeholder="enter user_id" >-->

            </div>
            <input class="btn btn-primary" type="submit" name="btn" value="doing editing">


        </form>
    </div>


@endsection