@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.topbar.store') }}" method="POST">
                        @csrf
                      <div class="card-header">
                        <h4> Topbar create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Topbar</label>
                          <input type="text" class="form-control"  name="topbar">
                        </div>
                        <div class="form-group">
                          <label>Topbar Icon</label>
                          <input type="text" class="form-control" name="topbaricon">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
