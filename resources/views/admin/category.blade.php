@extends('layouts.admin')

@section('title', 'Category list')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Categories</h3>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <p class="text-muted font-13 m-b-30">
                                    <button type="button" class="btn btn-round btn-success"><a href="{{route('admin_category_add')}}">Add Category</a></button>
                                </p>
                                <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="datatable-fixed-header_filter" class="dataTables_filter">
                                                <label>
                                                    Search:
                                                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-fixed-header">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="datatable-fixed-header_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Id</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;">Parent</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 162px;">Title</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 84px;">Edit</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 153px;">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr role="row" class="odd">
                                                        <td>{{ $rs->id}}</td>
                                                        <td>
                                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                                        </td>
                                                        <td>{{ $rs->title}}</td>
                                                        <td>{{ $rs->status}}</td>
                                                        <td><a href="{{route('admin_category_edit',['id' => $rs->id])}}" >Edit</a> </td>
                                                        <td><a href="{{route('admin_category_delete',['id' => $rs->id])}}" onclick="return confirm('Delete!! are u sure?')" >Delete</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" id="datatable-fixed-header_previous">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0">Previous</a>
                                                    </li>
                                                    <li class="paginate_button active">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="1" tabindex="0">1</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="2" tabindex="0">2</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="3" tabindex="0">3</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="4" tabindex="0">4</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="5" tabindex="0">5</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="6" tabindex="0">6</a>
                                                    </li>
                                                    <li class="paginate_button next" id="datatable-fixed-header_next">
                                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="7" tabindex="0">Next</a>
                                                    </li>
                                                </ul>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
@endsection
