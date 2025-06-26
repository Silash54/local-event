@extends('backend.layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Events</h5>
            <a class="btn btn-primary mb-3" href="{{ route('event.create') }}">Add event</a>

            @if ($events->count())
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date Location</th>
                            <th>Price</th>
                            <th>image</th>
                            <th style="width: 150px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $index => $event)
                            <tr>
                                <th>{{ $index + 1 }}</th>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->date_location }}</td>
                                <td>{{ $event->price }}</td>
                                <td><img src="{{ asset($event->image) }}" alt="img" srcset=""></td>
                                <td>{{ $event->name }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-success"
                                            href="{{ route('event.edit', $event->id) }}">Edit</a>
                                        <form action="{{ route('event.destroy', $event->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
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
