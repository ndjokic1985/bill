@extends('layout.master')
@section('content')
    @include('includes.error')
    <form method="post" action="{{ route('billCategory.store') }}">
        <div class="form-group">
            @csrf
            <label for="name">Name:</label>
            <input type="text" value="{{old('name')}}" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            <label for="price">Due Date:</label>
            <input type="number" value="{{old('due_day')}}" class="form-control" name="due_day" min="1" max="25"/>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
