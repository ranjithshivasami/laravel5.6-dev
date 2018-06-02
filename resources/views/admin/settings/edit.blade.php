@extends('layouts.app')
@section('style')

@stop
@section('content')
@include('admin.includes.error')
<div class="card">
    <div class="card-header">Update Settings</div>
    <div class="card-body">
        <form action="{{route('settings.update')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="site_name">
                    Site Name
                    
                </label>
                <input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">
                    Contact number
                </label>
                <input type="text" name="contact_number"  value="{{$settings->contact_number}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="contact_email">Email</label>
                <input type="text" name="contact_email"   value="{{$settings->contact_email}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address"  value="{{$settings->address}}"  class="form-control" />
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