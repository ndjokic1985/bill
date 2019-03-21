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
            <td colspan="2">Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($bills as $bill)
            <tr>
                <td>{{$bill->id}}</td>
                <td>{{$bill->category->name}}</td>
                <td>{{$bill->amount}}</td>
                <td>{{date('F, Y',strtotime($bill->period))}}</td>
                <td>{{($bill->paid)?'paid':'not paid'}}</td>
                <td><a href="{{route('bill.edit',$bill->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('bill.update',$bill->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
