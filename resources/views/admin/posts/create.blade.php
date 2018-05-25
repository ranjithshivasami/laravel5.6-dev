@extends('layouts.app')
@section('content')
@include('admin.includes.error')
<div class="card">
    <div class="card-header">Create Post</div>
    <div class="card-body">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" class="form-control" />
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                 <select name="category_id" id="" class="form-control">
                     <option value="">Select</option>
                     @foreach($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                 </select>
            </div>
            <div class="form-group">
                <label for="">Check Tags</label>
                @foreach($tags as $tag)
                <div class="checkbox">
                    <label><input name="tags[]" value="{{$tag->id}}" type="checkbox"> {{$tag->tag}} </label>
                 </div>
                @endforeach
                 
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="2" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop()

