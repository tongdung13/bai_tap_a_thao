@extends('home')

@section('title', 'danh sach khach hang')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>danh sach khach hang</h1>
            </div>
            <a href="{{ route('customers.create') }}" class="btn btn-primary">Add</a>
            <div class="col-12">
                <table class="table table-striped">
                   <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>date</th>
                        <th>email</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                   </thead>
                    <tbody>
                    @foreach($customers as $key => $customer)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $customer->image) }}" style="width: 100px">
                        </td>
                        <td>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-success">Update</a>
                            <a href="{{ route('customers.destroy', $customer->id) }}" onclick="return confirm('ban co muon xoa?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
