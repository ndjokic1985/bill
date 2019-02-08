@extends('layout.master')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <td>Id</td>
            <td>Category</td>
            <td>Amount</td>
            <td>Paid</td>
        </tr>
        </thead>
        <tbody>
        @foreach($bills as $bill)
            <tr>
                <td>{{$bill->id}}</td>
                <td>{{$bill->categoryName}}</td>
                <td>{{$bill->paid}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
