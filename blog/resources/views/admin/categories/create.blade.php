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

    <h2 class="text-center">Create New Category</h2>

    <div class="panel panel-default">
        <div class="panel-heading">
            Create new Category
        </div>
        <div class="panel body">
            <form action="{{ route('category.store') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success">Store Category</button>
                </div>
            </div>
            </form>
        </div>
    
    </div>
@stop