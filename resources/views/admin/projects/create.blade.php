@extends('layouts.admin')

@section('content')
    <div id="create-project">
        <form action="{{ route('admin.projects.store') }}" method="POST"
            class="d-flex flex-column justify-content-center p-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea rows="5" class="form-control" name="content"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add project</button>
            </div>
        </form>

    </div>
@endsection
