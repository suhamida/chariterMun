@extends('backend.master')

@section('title','Edit Blog Category')

@section('body')
    <div class="row py-3">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Update Blog Category</h3>
                </div>
                <div class="card-body">
                    <span class="text-success" >{{ session('success') }}</span>
                    <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4 ">Category Name</label>
                            <div class="col-md-8">
                                <select name="blog_category_id" class="form-control" id="">
                                    @foreach($blogCategories as $blogCategory)
                                        <option value="{{ $blogCategory->id }}" {{ $blog->blog_category_id == $blogCategory->id ? 'selected' : '' }}>{{ $blogCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4 ">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{ $blog->title }}" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4 ">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $blog->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4 ">image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control"/>
                                <img src="{{ asset($blog->image) }}" alt="" style="height: 60px" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4 ">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" {{ $blog->status == 1 ? 'checked' : '' }} value="1" />  Published</label>
                                <label for=""><input type="radio" name="status" {{ $blog->status == 0 ? 'checked' : '' }} value="0" />  Unpublished</label>

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
