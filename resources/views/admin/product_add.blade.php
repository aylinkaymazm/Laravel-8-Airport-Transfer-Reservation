@extends('layouts.admin')

@section('title', 'Admin Add Product Page')
@section('javascript')

    <!--Ckeditör-->
    <script type=”text/javascript” src=”{{asset('assets')}}/admin/ckeditor/ckeditor.js”></script>

@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Product Add Form</h3>
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
                                    <div class="x_content" style="display: block;">
                                        <br>
                                        <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                            @csrf
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Parent</label>

                                                <select class="form-control" name="category_id">
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
                                                <label class="control-label col-md-3 col-sm-3 ">Price</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number" value="0" class="form-control" name="price">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Quantity</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number" value="1" class="form-control" name="quantity">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Minquantity</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number" value="5" class="form-control" name="minquantity">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Tax</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number"  value="18" class="form-control" name="tax">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Detail</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <textarea id="summernote" name="detail"></textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#summernote').summernote();
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" class="form-control" name="slug">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="file" class="form-control" name="image">
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
                                                    <button type="submit" class="btn btn-success">Add product</button>
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
