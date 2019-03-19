@extends('layout.master')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>Category</td>
            <td>Amount</td>
            <td>Period</td>
            <td>Paid</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bills as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->category->name}}</td>
            <td>{{$bill->amount}}</td>
            <td>{{date('M, Y',strtotime($bill->period))}}</td>
            <td>{{($bill->paid)?'paid':'not paid'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection