@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Edit Carousel</h5>
                    <a class="btn btn-primary" href="{{ route('carousel.index') }}">Back</a>
                    <form action="{{ route('carousel.update',$carousel->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="title" name="title" value="{{ $carousel->title }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="image">
                                <img src="{{ asset('/public/images/.$carousel->image') }}" alt="img" class="h-40 w-120">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
