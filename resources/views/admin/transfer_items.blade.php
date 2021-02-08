@extends('layouts.admin')

@section('title', 'Product list')

@section('content')
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
                                    <form role="form" action="{{route('admin_transfer_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left">
                                        @csrf
                                        <form id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="datatable-fixed-header_info">
                                            <br>
                                            <div class="form-group">
                                                <tr>
                                                    <th>Id</th><td>{{$data->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th><td>{{$data->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>To Destination</th><td>{{$data->to_destination}}</td>
                                                </tr>
                                                <tr>
                                                    <th>From Destination</th><td>{{$data->from_destination}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Airline</th><td>{{$data->airline}}</td>
                                                </tr>
                                                <tr>
                                                    <th>flight Arrived Date</th><td>{{$data->flight_arrived_date}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Flight Arrived Time</th><td>{{$data->flight_arrived_time}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pick Up Time</th><td>{{$data->pick_up_time}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Created At</th><td>{{$data->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Updated At</th><td>{{$data->updated_at}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>
                                                        <select name="status">
                                                            <option selected="selected">{{$data->status}}</option>
                                                            <option>New</option>
                                                            <option>Accepted</option>
                                                            <option>Canceled</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Admin Note: </th>
                                                    <td> <textarea name="note" rows="3" cols="30"> {{$data->note}}</textarea> </td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                                <button type="submit" class="btn btn-success">Add product</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </div>
                                        </form>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr role="row" class="odd">
                                                <td > {{$rs->id}}</td>
                                                <td >{{$rs->user->name}}</td>
                                                <td ><a href="{{route('product',['id'=>$rs->product])}}" target="_blank">
                                                        {{$rs->product->title}}</a>
                                                </td>
                                                <td >{{$rs->to_destination}}</td>
                                                <td >{{$rs->from_destination}}</td>
                                                <td>{{ $rs->airline}}</td>
                                                <td>{{ $rs->flight_arrived_date}}</td>
                                                <td>{{ $rs->flight_arrived_time}}</td>
                                                <td>{{ $rs->pick_up_time}}</td>
                                                <td>{{ $rs->status}}</td>
                                                <td>{{ $rs->created_at}}</td>
                                                <td>{{ $rs->updated_at}}</td>
                                                <td>
                                                    <a href="{{route('admin_transfer_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')" >
                                                        <img src="{{asset('assets/admin/images')}}/edit.png" height="35"></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                        <table class="table table-data2">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>From Destination</th>
                                                <th>To Destination</th>
                                                <th>Airline Company</th>
                                                <th>Flight Number</th>
                                                <th>Flight Arrived Date</th>
                                                <th>Flight Arrived Time</th>
                                                <th>Pick Up Time</th>
                                                <th>Status</th>
                                                <th>Note</th>
                                                <th style="width: 5px" colspan="2">Actions</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            @php
                                                $total=0;
                                            @endphp

                                            @foreach ( $datalist as $rs )
                                                <form role="form" action="{{route('admin_transfer_item_update',['id'=>$rs->id])}}" method="post" class="form-horizontal form-label-left">
                                                    @csrf
                                                    <tr>
                                                        <td>{{Auth::user()->name}}</td>
                                                        <td><a style="text-decoration: none;" href="{{ route('product', ['id'=>$rs->id]) }}">{{ $rs->title }}
                                                                {{$rs->product->title}}
                                                            </a>
                                                        </td>
                                                        <td>{{ $rs->from_destination }}</td>
                                                        <td>{{ $rs->to_destination }}</td>
                                                        <td>{{ $rs->airline }}</td>
                                                        <td>{{ $rs->flight_number }}</td>
                                                        <td>{{ $rs->flight_arrived_date }}</td>
                                                        <td>{{ $rs->flight_arrived_time }}</td>
                                                        <td>{{ $rs->pick_up_time }}</td>
                                                        <td><select name="status">
                                                                <option selected="selected">{{$rs->status}}</option>
                                                                <option>Accepted</option>
                                                                <option>Canceled</option>
                                                                <option>S</option>
                                                                <option>Completed</option>
                                                            </select>
                                                        </td>
                                                        <td> <textarea name="note" rows="3" cols="30"> {{$rs->note}}</textarea> </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                                    <button type="submit" class="btn btn-success">Add Update</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
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
