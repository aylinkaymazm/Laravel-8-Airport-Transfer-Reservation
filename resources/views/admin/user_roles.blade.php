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
    <div class="card-title">
        <h3 class="text-center title-2">User Roles</h3>
    </div>
    <div class="form-group">
        <label class="control-label mb-1">Id</label>
        <input class="form-control" value="{{ $data->id }}" disabled>
    </div>
    <div class="form-group">
        <label class="control-label mb-1">Name</label>
        <input class="form-control" value="{{ $data->name }}" disabled>
    </div>
    <div class="form-group">
        <label class="control-label mb-1">Email</label>
        <input class="form-control" value="{{ $data->email }}" disabled>
    </div>
    <div class="form-group">
        <label class="control-label mb-1">Roles</label>
        <table>
            <tr>
                @foreach($data->roles as $row)
                    <td> {{ $row->name }} </td>
                    <td>
                        <a href="{{ route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$row->id]) }}" onclick="return confirm('You are removing this role from the user! Are you sure?')">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Remove">
                                <i style="margin-right:15px; margin-left: 5px; font-size: 30px; color: #cd5c5c;" class="fa fa-play-circle"></i>
                            </button>
                        </a>
                    </td>
                    <td></td>
                @endforeach
            </tr>
        </table>
    </div>
    <form action="{{ route('admin_user_role_add', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <select class="form-control" name="roleid">
                @foreach($datalist as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                @endforeach
            </select>
            <br>
            <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                <i class="fa fa-lg"></i>&nbsp;
                <span>Add Role</span>
            </button>
        </div>
    </form>
    <hr>
</div>
<!-- /page content -->
</body>
</html>
<!-- page content -->
