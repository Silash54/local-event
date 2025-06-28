@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Create Galleries</h5>
                    <a class="btn btn-primary" href="{{ route('gallery.index') }}">Back</a>
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="caption" class="col-sm-2 col-form-label">Caption</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="caption" name="caption">
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
