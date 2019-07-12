@extends('layouts.app')

@section('content')
    <h2 class="text-center">Create New Post</h2>

    <div class="panel panel-default">
        <div class="panel-heading">
            Create new post
        </div>
        <div class="panel body">
            <form action="{{ route('post.store') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
            <label for="featured">Feature Image</label>
            <input type="file" name="featured" class="form-control">
            </div>

            <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success">Store Post</button>
                </div>
            </div>
            </form>
        </div>
    
    </div>
@stop