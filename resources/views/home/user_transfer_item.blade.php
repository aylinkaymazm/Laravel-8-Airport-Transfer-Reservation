<html>
<head>
    <title>Image Gallery</title><!-- Bootstrap -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets') }}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets') }}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets') }}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!--Ckeditör-->
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


</head>
<body>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Transfer</h3>
                @include('home.message')
            </div>
            <div class="x_content">
                <div class="row">
                    <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal form-label-left" action="{{route('user_transfer_update', ['id'=> $data -> id ])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Category</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <select class="form-control" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif > {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">from_destination</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="from_destination" class="form-control" placeholder="Default Input" value="{{$data->from_destination}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">to_destination</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <textarea name="to_destination" id="ckeditor1" class="ckeditor">{{$data->to_destination}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">note</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <textarea name="note" id="note" class="ckeditor">{{$data->note}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">airline</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <textarea name="airline" id="airline" class="ckeditor">{{$data->airline}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">pick_up_time</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="pick_up_time" class="form-control" value="{{$data->pick_up_time}}" placeholder="Default Input" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">flight_number</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="flight_number" class="form-control" value="{{$data->flight_number}}" placeholder="Default Input" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">flight_arrived_date</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="flight_arrived_date" class="form-control" value="{{$data->flight_arrived_date}}" placeholder="Default Input" value="0">
                                        </div>
                                    </div>


                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">flight_arrived_time</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="flight_arrived_time" class="form-control" value="{{$data->flight_arrived_time}}" placeholder="Default Input" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">created_at</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="created_at" class="form-control" value="{{$data->created_at}}" placeholder="Default Input" value="0">
                                        </div>
                                    </div>

                                    <div class="col-md-11 col-sm-11 ">
                                        <select class="form-control" name="status">
                                            <option selected="selected">True</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Transfer</button>
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
<!-- /page content -->
</body>
</html>
