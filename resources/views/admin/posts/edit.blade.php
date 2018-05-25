@extends('layouts.app')
@section('content')
@include('admin.includes.error')
<div class="card">
    <div class="card-header">Update Post : {{$post->id}}</div>
    <div class="card-body">
        <form action="{{route('post.update',['id' => $post->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control" />
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
                     <option  value="{{$category->id}}"
                              @if($post->category->id === $category->id)
                              selected
                              @endif
                              >{{$category->name}}</option>
                     @endforeach
                 </select>
            </div>
             <div class="form-group">
                <label for="">Check Tags</label>
                @foreach($tags as $tag)
                <div class="checkbox">
                    <label><input name="tags[]" value="{{$tag->id}}"
                                  @foreach($post->tags as $t)
                                    @if($t->id == $tag->id)
                                     checked
                                    @endif
                                  @endforeach
                                  type="checkbox"> {{$tag->tag}} </label>
                 </div>
                @endforeach                 
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="2" class="form-control">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop()

