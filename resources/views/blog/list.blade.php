@extends('layout.app')
@section('title')
    <title>LetMobile - Blogs</title>
@endsection
@section('subtitle')
<div class="pagetitle">
  <h1>Blogs</h1>
</div>
@endsection
@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Blog Title</th>
        <th scope="col">Blog Description</th>
        <th scope="col">Blog Image</th>
        <th scope="col">created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($blogs as $row)
      <tr>
          <td>{{ $row['title'] ?? '' }} </td>
          <td>{{ $row['description'] ?? '' }}</td>
          <td>Image pending</td>
          <td>{{ $row['created_at'] ?? '' }}</td>
          <td>
            <form method="post" action="{{route('blogs.destroy',$row['id'])}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            </form>
              <a href="{{ url('blogs') }}/{{$row['id']}}/edit"><i class="fa fa-edit"></i></a>
          </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection