@extends('backend.layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Table with hoverable rows</h5>
            <a class="btn btn-primary" href="{{ route('carousel.create') }}">Add Carousel</a>
            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                @forelse ($carousels as $carousel)
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carousels as $index => $carousel)
                            <tr>
                                <th scope="row">{{ $index++ }}</th>
                                <td>{{ $carousel->title }}</td>
                                <td> <img class="img-thumbnail h-90 w-50" src="{{ $carousel->image }}" alt="img"
                                        srcset=""></td>
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
                @empty
                    <p class="text-danger">No record found</p>
                @endforelse
            </table>
        </div>
    </div>
@endsection
