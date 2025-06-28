@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Edit Events</h5>
                    <a class="btn btn-primary" href="{{ route('event.index') }}">Back</a>
                    <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="title" name="title"
                                    value="{{ $event->title }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-3 col-form-label">Description <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea name="description" id="description" cols="30" rows="10">{{ $event->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="location" class="col-sm-4 col-form-label">Date Location <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="location" name="date_location"
                                    value="{{ $event->date_location }}" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">price <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="price" name="price"
                                    value="{{ $event->price }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-3 col-form-label">Image <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" name="image" >
                                <img src="{{ asset($event->image) }}" alt="" srcset="{{ $event->title }}">
                            </div>
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="category_id" class="col-sm-4 col-form-label">
                        Category <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $selectedCategoryId ?? '') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
