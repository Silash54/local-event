@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Category</h5>
            <a class="btn btn-primary mb-3" href="{{ route('categories.create') }}">Add Category</a>

            @if ($categories->count())
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $category)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-success"
                                            href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-danger">No records found.</p>
            @endif
        </div>
    </div>
@endsection
