@extends('backend.master')

@section('title')

    Edit Category

@endsection


@section('body')

    <div class="row py-3">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Update Blog Category</h3>
                </div>
                <div class="card-body">
                    <span class="text-success" >{{ session('success') }}</span>
                    <form action="{{ route('blogCategory.update', $blogCategory->id) }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4 ">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $blogCategory->name }}" class="form-control" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4 ">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" {{$blogCategory->status == 1 ? 'checked' : ''}} value="1" />  Published</label>
                                <label for=""><input type="radio" name="status" {{$blogCategory->status == 0 ? 'checked' : ''}} value="0" />  Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4 "></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-success" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
