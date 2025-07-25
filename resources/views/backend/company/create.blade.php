@extends('backend.layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Create Company</h5>
                    <a class="btn btn-primary mb-3" href="{{ route('company.index') }}">Back</a>

                    <form action="{{ route('company.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Company Name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" name="address" id="inputAddress"
                                    placeholder="Enter address" value="{{ old('address') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telephone">Telephone</label>
                                <input type="text" class="form-control" name="tele" id="telephone"
                                    placeholder="+977-" value="{{ old('tele') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook"
                                placeholder="Facebook URL" value="{{ old('facebook') }}">
                        </div>

                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" name="twitter" id="twitter"
                                placeholder="Twitter URL" value="{{ old('twitter') }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="tiktok">Tiktok</label>
                            <input type="text" class="form-control" name="tiktok" id="tiktok"
                                placeholder="Tiktok URL" value="{{ old('tiktok') }}">
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
