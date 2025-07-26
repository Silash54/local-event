@extends('backend.layout.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>From</h3>
        <h5>Subject:{{ $showMessage->subject }}</h5>
    </div>
    <div class="card-body">
        <p>{{ $showMessage->body }}</p>
    </div>
</div>
@endsection