@extends('layouts.admin')

@section('title', 'Admin Panel Edit Page')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Category Edit Form</h3>
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

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_content" style="display: block;">
                        <br>
                        <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left">
                            @csrf
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Parent</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Main Category</option>
                                    @foreach ( $datalist as $rs )
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                           {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" id="title" class="form-control" value="{{$data->title}}" name="title">
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Keywords</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" value="{{$data->keywords}}" name="keywords">
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" value="{{$data->description}}" name="description">
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" value="{{$data->slug}}" name="slug">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <select class="form-control" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="submit" class="btn btn-success">Update Category</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
