@extends('layout.master')
@section('content')
    @include('includes.error')
    <form method="POST" action="{{route('bill.update',$bill->id)}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="cat_id">Category</label>
            <select id="cat_id" name="cat_id" class="form-control">
                @foreach($categories as $category)
                    <option
                        value="{{$category->id}}" {{($category->id==$bill->category->id)?'selected':''}}>{{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" class="form-control" value="{{$bill->amount}}">
        </div>
        <div class="form-group">
            <label for="month">Month:</label>
            <select id="month" name="month" class="form-control">
                @foreach($months as $month)
                    <option
                        value="{{$month}}" {{($month==date('F',strtotime($bill->period)))?'selected':''}}>{{$month}}</option>
                @endforeach
            </select>
            <label for="year">Year:</label>
            <select id="year" name="year" class="form-control">
                @for($i=2010;$i<=2020;$i++)
                    <option {{($i==date('Y',strtotime($bill->period)))?'selected':''}} value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="paid">Paid:</label>
            <input type="checkbox" class="form-control" {{($bill->paid)?'checked':''}} id="paid" name="paid"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
