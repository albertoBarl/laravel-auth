@extends('layouts.admin')
@section('content')
    <div class="p-2"><a class="btn btn-dark" href="{{ route('admin.projects.create') }}">ADD PROJECT</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Creato:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)
                <tr>
                    <th scope="row">{{ $item['id'] }}</th>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['slug'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
