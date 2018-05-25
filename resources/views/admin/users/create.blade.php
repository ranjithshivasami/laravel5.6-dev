@extends('layouts.app')
@section('content')
@include('admin.includes.error')
<div class="card">
    <div class="card-header">Create User</div>
    <div class="card-body">
        <form action="{{route('user.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="" class="form-control" />
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="" class="form-control" />
            </div>
            
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </div>
            
        </form>
        
    </div>
</div>
@stop