@extends('layout.app')
@section('title')
<title>LetMobile - Add Blog</title>
@endsection
@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Create Blog
            </h3>
        </div>
    </div>
    <form class="kt-form kt-form--label-right" enctype="multipart/form-data" id="blogForm" method="POST"  action="{{ url('blogs') }}">
        @csrf
        @method('POST')
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
        @endif 
            </div>
        <div class="kt-portlet__body">
            <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2"></div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="form-group ">
                        <label>Blog Title</label>
                        <div class="input-group input-group-lg-group">
                            <input type="text" class="form-control" name="title" placeholder="Title" aria-describedby="basic-addon1">
                        </div>
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group ">
                        <label>Blog Category</label>
                        <div class="input-group input-group-lg-group">
                            <select class="form-control" name="blog_category">
                                <option value="1">Mobile</option>
                            </select>
                        </div>
                        @if ($errors->has('blog_category'))
                            <span class="text-danger">{{ $errors->first('blog_category') }}</span>
                        @endif
                    </div>
                    <div class="form-group ">
                        <label>Blog Image</label>
                        <div class="input-group input-group-lg-group">
                            <input type="file" name="file" class="form-control" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label>Short Description</label>
                        <div class="input-group input-group-lg-group">
                            <textarea class="form-control" name="description" placeholder="Short Description" aria-describedby="basic-addon1"></textarea>
                        </div>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-group ">
                        <label>Blog Tags</label>
                        <div class="input-group input-group-lg-group">
                            <input type="text" name="blog_tags" class="form-control" placeholder="Blog Slug" aria-describedby="basic-addon1">
                        </div>
                        @if ($errors->has('blog_tags'))
                            <span class="text-danger">{{ $errors->first('blog_tags') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="kt-form__actions">
                            <input type="submit" name="" value="Save" class="btn btn-secondary">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
    </div></form>
</div>
@endsection