@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.about.update', $about->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> About Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Number</label>
                          <input type="number" class="form-control"  name="number" value="{{ $about->number }}">
                        </div>
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $about->title }}">
                        </div>
                        <div class="form-group">
                            <label>Span</label>
                            <input type="text" class="form-control" name="span" value="{{ $about->span }}">
                          </div>

                          <div class="form-group">
                            <label>Bg</label>
                            <input type="text" class="form-control" name="bg" value="{{ $about->bg }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
