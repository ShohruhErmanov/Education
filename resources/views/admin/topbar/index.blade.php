@extends('layouts.admin')
@section('title')
    Topbar
@endsection
@section('content')
    @if (session('seccess'))
        <div class="alert alert-primary alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('seccess') }}
            </div>
        </div>
    @endif


    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0 ">
                    <h2>Topbar Table</h2>
                    <div class="card-header-form mt-3 ">
                        <a href="{{ route('admin.topbar.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>


            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>T/R</th>
                                <th>Topbar</th>
                                <th>Topbar Icon</th>
                                <th>Link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($topbars as $topbar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $topbar->topbar }}</td>
                                    <td><i class="{{ $topbar->topbaricon }} fa-2x"></i></td>
                                    <td>{{ $topbar->link }}</td>
                                    <td class="d-flex ">
                                        <a href="#!"
                                            class="btn btn-warning ">Show</a>
                                        <a href="{{ route('admin.topbar.edit', $topbar->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.topbar.destroy', $topbar->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger "
                                                onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
