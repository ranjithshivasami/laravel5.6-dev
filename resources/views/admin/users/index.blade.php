@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Users</div>
    <div class="card-body">
        <a href="{{route('user.create')}}" class="btn btn-success">Create User</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Permission</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><img src="{{asset($user->profile->avatar)}}" alt="" width="60px" height="60px" style="border-radius: 50%" /></td>
                        <td>{{$user->name}}</td>
                        <td>
                            @if($user->admin)
                                <a href="" class="btn btn-primary btn-sm">Remove permission</a>
                            @else
                                <a href="" class="btn btn-primary btn-sm">Make Admin</a>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        
    </div>
</div>
@stop