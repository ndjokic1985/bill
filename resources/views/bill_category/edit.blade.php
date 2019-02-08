@extends('layout.master')
@section('content')
    @include('includes.error')
    <form method="post" action="{{ route('billCategory.update',$category->id)}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" value="{{$category->name}}" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            <label for="price">Due Date:</label>
            <input type="number" value="{{$category->due_day}}" class="form-control" name="due_day" min="1" max="25"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
