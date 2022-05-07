@extends('admin-theme._master')

@section('judul', 'Create Customer')

@section('isi')

    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Create Customer
                    <a class="btn btn-sm btn-info float-right"
                       href="{{ url('customer') }}">
                        <i class="fas fa-backward"></i> Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" cols="30" rows="2" class="form-control"></textarea>
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Save Customer">
                        <a class="btn btn-warning float-right" href="{{ url('customer') }}">
                            <i class="fas fa-backward"></i> Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
