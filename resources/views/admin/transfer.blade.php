@extends('layouts.admin')

@section('title', 'Admin Transfer Control list')
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
                <h3>Transfer Control list</h3>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-data__tool">
                                            <p class="text-muted font-13 m-b-30">
                                                <button type="button" class="btn btn-round btn-success"><a href="{{route('admin_transfer_add')}}">Add Transfer</a></button>
                                            </p>
                                        </div>

                                        <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="datatable-fixed-header_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Id</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 84px;">Car Selection</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 84px;">Note</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">From Destination</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">To Destination</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Airline</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Flight Number</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Flight Arrived Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Flight Arrived Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Pick Up Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Created At</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Edit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)
                                                <tr role="row" class="odd">
                                                    <td > {{ $rs->id}}</td>
                                                    <td>{{$rs->user->name}}</td>
                                                    <td><a style="text-decoration: none;" href="{{ route('product', ['id'=>$rs->id]) }}">{{ $rs->title }}</a></td>
                                                    <td>{{ $rs->note}}</td>
                                                    <td>{{ $rs->from_destination }}</td>
                                                    <td>{{ $rs->to_destination }}</td>
                                                    <td>{{ $rs->airline }}</td>
                                                    <td>{{ $rs->flight_number }}</td>
                                                    <td>{{ $rs->flight_arrived_date }}</td>
                                                    <td>{{ $rs->flight_arrived_time }}</td>
                                                    <td>{{ $rs->pick_up_time }}</td>
                                                    <td>{{ $rs->created_at }}</td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td><a href="{{route('user_transfer_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=600')" >
                                                            <img src="{{asset('assets/admin/images')}}/edit.png" height="35"></a>
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