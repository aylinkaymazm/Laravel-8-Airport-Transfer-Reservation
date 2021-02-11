@extends('layouts.admin')

@section('title', 'Admin Edit Product Page')

@section('javascript')

    <!--Ckeditör-->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>User edit Form</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="x_content" style="display: block;">
                <br><hr>
                <form action="{{ route('admin_user_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-1">Name</label>
                        <input name="name" type="text" class="form-control" value="{{ $data->name }}" data-val="true">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Email</label>
                        <input name="email" type="email" class="form-control" value="{{ $data->email }}" data-val="true">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Phone</label>
                        <input name="phone" type="text" class="form-control" value="{{ $data->phone }}" data-val="true">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Address</label>
                        <input name="address" type="text" class="form-control" value="{{ $data->address }}" data-val="true">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Image</label>
                        <input name="image" type="file" class="form-control" data-val="true">
                        @if ($data->profile_photo_path)
                            <img src="{{ Storage::url($data->profile_photo_path) }}" style="margin-top: 25px;" height="100" alt="">
                        @endif
                    </div>
                    <div>
                        <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lg"></i>&nbsp;
                            <span>Update the User</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
