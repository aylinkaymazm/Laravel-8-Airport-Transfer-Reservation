@extends('layouts.admin')

@section('title', 'Admin Panel Add Page')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Category Add Form</h3>
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

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="col-md-6 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" style="display: block;">
                                        <br>
                                        <form role="form" action="{{route('admin_category_create')}}" method="post" class="form-horizontal form-label-left">
                                            @csrf
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Parent</label>

                                                <select class="form-control" name="parent_id">
                                                    <option selected="selected">Main Category</option>
                                                    @foreach ( $datalist as $rs )
                                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" id="title" class="form-control" name="title">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Keywords</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" class="form-control" name="keywords">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" class="form-control" name="description">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" class="form-control" name="slug">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control" name="status">
                                                        <option selected="selected">False</option>
                                                        <option>True</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <button type="submit" class="btn btn-success">Add Category</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
