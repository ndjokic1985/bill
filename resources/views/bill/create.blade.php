@extends('layout.master')
@section('content')
<div>
    @include('includes.error')
    <form method="post" action="{{ route('bill.store') }}">
        <div class="form-group">
            @csrf
            <label for="cat_id">Category:</label>
            <select id="cat_id" name="cat_id">
                <option value='' {{(old('cat_id')=='')?'selected':''}}>Please select...</option>
                @foreach($categories as $category)
                <option {{(old('cat_id')==$category->id)?'selected':''}} value="{{$category->id}}">{{$category->name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" value="{{old('amount')}}" class="form-control" id="amount" name="amount" />
        </div>
        <div class="form-group">
            <label for="month">Month:</label>
            <select id="month" name="month">
                @foreach($months as $month)
                <option {{(date('F')==$month)?'selected':''}} value="{{$month}}">{{$month}}</option>
                @endforeach
            </select>
            <label for="year">Year:</label>
            <select id="year" name="year">
                @for($i=2010;$i<=2020;$i++) <option {{($i==date('Y'))?'selected':''}} value="{{$i}}">{{$i}}</option>
                    @endfor
            </select>
            <input type="hidden" id="period" value="{{date('Y')}}-{{date('m')}}-01" name="period">
        </div>
        <div class="form-group">
            <label for="paid">Paid:</label>
            <input type="checkbox" class="form-control" id="paid" name="paid" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection