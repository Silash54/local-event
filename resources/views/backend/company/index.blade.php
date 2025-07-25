@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Company</h5>
            <a class="btn btn-primary mb-3" href="{{ route('company.create') }}">Add Company</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Tele</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Twitter</th>
                            <th scope="col">Tiktok</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
        </div>
    </div>
@endsection
