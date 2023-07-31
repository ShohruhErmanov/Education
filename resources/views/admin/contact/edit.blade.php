@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Contact Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $contact->title }}">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" name="text" value="{{ $contact->text }}">
                          </div>

                          <div class="form-group">
                            <label>Icon</label>
                            <input type="text" class="form-control" name="icon" value="{{ $contact->icon }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
