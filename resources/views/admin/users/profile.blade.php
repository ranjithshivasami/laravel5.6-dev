@extends('layouts.app')

@section('content')
@include('admin.includes.error')
<div class="card">
    <div class="card-header">Update Profile</div>
    <div class="card-body">
        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">User name</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{$user->email}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" value="{{$user->password}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar" value="{{$user->profile->avatar}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" value="{{$user->profile->facebook}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="youtube">Youtube</label>
                <input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="" cols="0" rows="3" class="form-control">{{$user->profile->about}}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop