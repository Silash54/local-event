@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gallery</h5>
            <a class="btn btn-primary mb-3" href="{{ route('gallery.create') }}">Add Galleries</a>
            @if ($galleries->count())
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Event Title</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $index => $gallery)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td><img class="img-thumbnail" style="height: 90px; width: 120px;" src="{{ asset($gallery->image) }}" alt="{{ $gallery->caption }}" srcset=""></td>
                                <td>
                                    {{ $gallery->caption }}
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-success"
                                            href="{{ route('carousel.edit', $gallery->id) }}">Edit</a>
                                        <form action="{{ route('carousel.destroy', $gallery->id) }}" method="POST">
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
