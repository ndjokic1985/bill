@extends('layout.master')
@section('content')
    @include('includes.success')
    <div style="margin-top: 10px;">
        <a class="btn btn-dark" href="{{route('billCategory.create')}}">New Category</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Due day</td>
            <td colspan="2">Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->due_day}}</td>
                <td><a href="{{route('billCategory.edit',$category->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('billCategory.destroy',$category->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
