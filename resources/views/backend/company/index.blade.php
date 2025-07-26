@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Company</h5>
            @include('message.message')
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
                    @if ($company)
                        <tr>
                            <td>1</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->telephone }}</td>
                            <td>{{ $company->facebook }}</td>
                            <td>{{ $company->twitter }}</td>
                            <td>{{ $company->tiktok }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-success" href="{{ route('categories.edit', $company->id) }}">Edit</a>
                                    <form action="{{ route('categories.destroy', $company->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this item?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="9" class="text-center">No Record Found</td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection
