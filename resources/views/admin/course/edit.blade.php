@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Course Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="title" class="form-control"  name="title" value="{{ $course->title }}">
                        </div>
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>Span1</label>
                            <input type="text" class="form-control" name="span1" value="{{ $course->span1 }}">
                          </div>

                          <div class="form-group">
                            <label>Span2</label>
                            <input type="text" class="form-control" name="span2" value="{{ $course->span2 }}">
                          </div>

                          <div class="form-group">
                            <label>Url</label>
                            <input type="text" class="form-control" name="url" value="{{ $course->url }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
