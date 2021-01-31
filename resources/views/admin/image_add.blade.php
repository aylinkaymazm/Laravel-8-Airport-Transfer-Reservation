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

</head>
<body>

<div class="x_content">
    <br>
    <h3>Product: {{$data->title}}</h3>
    <form role="form" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
        @csrf
        <div class="form-group row ">
            <label class="control-label col-md-3 col-sm-3 ">Title</label>
            <div class="col-md-9 col-sm-9 ">
                <input type="text" id="title" class="form-control" name="title">
            </div>
        </div>

        <div class="form-group row ">
            <label class="control-label col-md-3 col-sm-3 ">Image</label>
            <div class="col-md-9 col-sm-9 ">
                <input type="file" class="form-control" name="image">
            </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-9 col-sm-9  offset-md-3">
                <button type="submit" class="btn btn-success">Add image</button>
            </div>
        </div>

    </form>
    <br>
    <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="datatable-fixed-header_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Id</th>
            <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 162px;">Title</th>
            <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 84px;">Image</th>
            <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($images as $rs)
            <tr role="row" class="odd">
                <td > {{ $rs->id}}</td>
                <td>{{ $rs->title}}</td>
                <td>
                    @if ($rs->image)
                        <img src="{{ Storage::url($rs->image)}}" height="60" alt="">
                    @endif
                </td>
                <td><a href="{{route('admin_image_delete',['id' => $rs->id,'product_id' =>$data->id])}}" onclick="return confirm('Record will be Delete!! are u sure?')" >
                        <img src="{{asset('assets/admin/images')}}/delete.png" height="35"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!-- /page content -->
</body>
</html>
<!-- page content -->
