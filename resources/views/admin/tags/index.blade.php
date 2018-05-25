@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Tag</div>
    <div class="card-body">
        <a href="{{route('tag.create')}}" class="btn btn-default">Create Tags</a>
        <table class="table table-hover">
    <thead>
        <tr>
            <th>Tag</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @if($tags->count() > 0)
            @foreach($tags as $tag)
            <tr>
                <td>{{$tag->tag}}</td>
                <td><a href="{{route('tag.edit',['id' => $tag->id])}}" class="btn-sm btn-primary small">Edit</a></td>
                <td><a href="{{route('tag.delete',['id' => $tag->id])}}" class="btn-sm btn-danger small">Delete</a></td>
            </tr>
            @endforeach        
        @else
            <tr>
                <td class="text-center" colspan="3"> No record found</td>
            </tr>
        @endif
        
    </tbody>
</table>
    </div>
</div>

@stop