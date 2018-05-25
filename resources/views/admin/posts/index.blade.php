@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Posts</div>
    <div class="card-body">
        <a href="{{route('post.create')}}" class="btn btn-default">Create Post</a>
        <table class="table table-hover">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @if($posts->count() > 0)
            @foreach($posts as $post)
            <tr>
                <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="50"/></td>
                <td>{{$post->title}}</td>
                <td><a href="{{route('post.edit',['id' => $post->id])}}" class="btn-sm btn-primary small">Edit</a></td>
                <td><a href="{{route('post.delete',['id' => $post->id])}}" class="btn-sm btn-danger small">Delete</a></td>
            </tr>
            @endforeach
        @else
         <tr>
             <td colspan="4" class="text-center">No record found</td>
        </tr>
        @endif            
    </tbody>
</table>
    </div>
</div>
@stop