@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.topbar.update', $topbar->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Topbar Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Topbar</label>
                          <input type="text" class="form-control"  name="topbar" value="{{ $topbar->topbar }}">
                        </div>
                        <div class="form-group">
                          <label>Topbar Icon</label>
                          <input type="text" class="form-control" name="topbaricon" value="{{ $topbar->topbaricon }}">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="{{ $topbar->link }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
