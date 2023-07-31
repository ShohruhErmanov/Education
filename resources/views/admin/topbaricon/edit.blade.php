@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.topbaricon.update', $topbaricon->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Topbar Icon Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Topbar Icon</label>
                          <input type="text" class="form-control"  name="topbaricon" value="{{ $topbaricon->topbaricon }}">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="{{ $topbaricon->link }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
