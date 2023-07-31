@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.feature.update', $feature->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Feature Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control"  name="title" value="{{ $feature->title }}">
                        </div>
                        <div class="form-group">
                          <label>Text</label>
                          <input type="text" class="form-control" name="text" value="{{ $feature->text }}">
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" class="form-control" name="icon" value="{{ $feature->icon }}">
                          </div>

                          <div class="form-group">
                            <label>Bg</label>
                            <input type="text" class="form-control" name="bg" value="{{ $feature->bg }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
