@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Carousel</h5>
            <a class="btn btn-primary mb-3" href="{{ route('carousel.create') }}">Add Carousel</a>

            @if ($carousels->count())
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carousels as $index => $carousel)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $carousel->title }}</td>
                                <td>
                                    <img class="img-thumbnail" style="height: 90px; width: 120px;"
                                        src="{{ asset( $carousel->image) }}" alt="img">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-success"
                                            href="{{ route('carousel.edit', $carousel->id) }}">Edit</a>
                                        <form action="{{ route('carousel.destroy', $carousel->id) }}" method="POST">
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
