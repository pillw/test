@extends('layouts.app')

@section('content')
@if (count($errors) > 0 )
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

    <h2 class="text-center">Update Category</h2>

    <div class="panel panel-default">
        <div class="panel-heading">
            Update Category : {{$category->name}}
        </div>
        <div class="panel body">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success">Update Category</button>
                </div>
            </div>
            </form>
        </div>
    
    </div>
@stop