@extends('layouts.admin')

@section('title', 'Product list')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Users</h3>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="datatable-fixed-header_info">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Photo</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Roles</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr class="tr-shadow">
                                                        <td>{{ $rs->id }}</td>
                                                        <td>
                                                            @if ($rs->profile_photo_path)
                                                                <img src="{{ Storage::url($rs->profile_photo_path) }}" height="30" alt="" >
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a style="color: cornflowerblue;" href="{{ route('admin_user_show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">
                                                                {{ $rs->name }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $rs->email }}</td>
                                                        <td>{{ $rs->phone }}</td>
                                                        <td>{{ $rs->address }}</td>
                                                        <td>
                                                            @foreach($rs->roles as $row)
                                                                {{ $row->name }}
                                                            @endforeach
                                                            <a href="{{ route('admin_user_roles', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Add Roles">
                                                                    <i style="font-size: 30px; color: grey;" class="fa fa-play-circle"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <a href="{{ route('admin_user_edit', ['id'=>$rs->id]) }}">
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="fa fa-play-circle"></i>
                                                                    </button>
                                                                </a>
                                                                <span style="margin-right: 20px;"></span>
                                                                <a href="{{ route('admin_user_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this user! Are you sure?')">
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="fa fa-play-circle"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="spacer"></tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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

@section('footer')

    <script src="{{ asset('assets') }}/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets') }}/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets') }}/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets') }}/admin/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets') }}/admin/vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets') }}/admin/build/js/custom.min.js"></script>

    <!--Ckeditör-->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


@endsection
