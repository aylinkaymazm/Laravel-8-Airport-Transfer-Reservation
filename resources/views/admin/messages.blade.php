@extends('layouts.admin')

@section('title', 'Contact Messages list')
@section('javascript')

    <!--Ckeditör-->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('home.message')
            <div class="page-title">
                <div class="title_left">

                    <h3>Messages</h3>

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
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Id</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 162px;">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Phone</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 84px;">Message</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 84px;">Admin Note</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Edit</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr role="row" class="odd">
                                                        <td > {{ $rs->id}}</td>
                                                        <td>{{ $rs->name}}</td>
                                                        <td>{{ $rs->email}}</td>
                                                        <td>{{ $rs->phone}}</td>
                                                        <td>{{ $rs->message}}</td>
                                                        <td>{{ $rs->note}}</td>
                                                        <td>{{ $rs->status}}</td>
                                                        <td><a href="{{route('admin_messages_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')" >
                                                                <img src="{{asset('assets/admin/images')}}/edit.png" height="35"></a>
                                                        </td>

                                                        <td><a href="{{route('admin_messages',['id' => $rs->id])}}" onclick="return confirm('Delete!! are u sure?')" ><img src="{{asset('assets/admin/images')}}/delete.png" height="35"></a></td>
                                                    </tr>
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

@endsection
