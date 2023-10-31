@extends('backend.master')

@section('title','Manage Blogs')

@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Manage Blogs</h3>
                </div>
                <div class="card-body">
                    <span class="text-success" >{{ session('success') }}</span>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->blogCategory->name }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{!! $blog->description !!}</td>
                                <td>
                                    <img src="{{ asset($blog->image) }}" alt="" style="height: 60px">
                                </td>
                                <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger ms-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
