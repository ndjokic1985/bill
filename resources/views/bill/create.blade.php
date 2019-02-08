@extends('layout.master')
@section('content')
    <div>
        @include('includes.error')
        <form method="post" action="{{ route('bill.store') }}">
            <div class="form-group">
                @csrf
                <label for="category">Category:</label>
                <select name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" name="amount"/>
            </div>
            <div class="form-group">
                <label for="paid">Month:</label>
                <select name="month">
                    @foreach($months as $month)
                        <option {{(date('F')==$month)?'selected':''}} value="{{$month}}">{{$month}}</option>
                    @endforeach
                </select>
                <label for="paid">Year:</label>
                <select name="year">
                    @for($i=2010;$i<=2020;$i++)
                        <option {{($i==date('Y'))?'selected':''}} value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label for="paid">Paid:</label>
                <input type="checkbox" class="form-control" name="paid"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
