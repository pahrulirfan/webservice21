@extends('admin-theme._master')

@section('judul', 'Data Customer')

@section('isi')

    <div class="row mt-4">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    Data Customer
                    <a class="btn btn-sm btn-primary float-right"
                       href="{{ route('customer.create') }}">
                        <i class="fas fa-plus-square"></i> Add Customer
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->address }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
