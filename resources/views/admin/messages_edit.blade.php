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
<div class="page-title">
    <div class="title_left">
        <h3>Message Details</h3>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_content" style="display: block;">
                    <br>
                    <form action="{{route('admin_message_update',['id'=>$data->id])}}" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left">
                        @csrf
                        <div class="form-group row">
                            <label>Admin Note</label>
                            <textarea name="note" class="ckeditor" id="detail">{{ $data->note }}</textarea>

                        </div>
                        <div class="form-group row">
                            <label>Status</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select class="form-control" name="status">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>New</option>
                                    <option>Answered</option>
                                </select>
                            </div>
                        </div>


                        <div style="margin-bottom: 55px;" id="success">@include('home.message')</div>
                        <div class="form-group row">
                            <div>
                                <button type="submit" class="btn btn-success">edit Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
