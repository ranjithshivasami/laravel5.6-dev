@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <a href="{{route('category.create')}}" class="btn btn-default">Create category</a>
        <table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @if($categories->count() > 0)
            @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td><a href="{{route('category.edit',['id' => $category->id])}}" class="btn-sm btn-primary small">Edit</a></td>
                <td><a href="{{route('category.delete',['id' => $category->id])}}" class="btn-sm btn-danger small">Delete</a></td>
            </tr>
            @endforeach        
        @else
            <tr>
                <td colspan="3" class="text-center">No record found</td>
            </tr>
        @endif
        
    </tbody>
</table>
    </div>
</div>

@stop