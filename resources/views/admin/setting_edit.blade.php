@extends('layouts.admin')

@section('title', 'Admin Edit Setting Page')
@section('javascript')
    <!-- include libraries(jQuery, bootstrap, fontawesome) -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.js"></script>

@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Setting edit Form</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="x_content" style="display: block;">
                                <br>
                                <form role="form" action="{{route('admin_setting_update')}}" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left">
                                    @csrf

                                    <input type="hidden" id="id" value="{{$data->id}}" class="form-control" name="id">
                                    <br>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" id="title" value="{{$data->title}}" class="form-control" name="title">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Keywords</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" value="{{$data->keywords}}" class="form-control" name="keywords">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" value="{{$data->description}}" class="form-control" name="description">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">company</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" value="{{$data->company}}" class="form-control" name="company">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">address</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" value="{{$data->address}}" class="form-control" name="address">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">phone</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="number" value="{{$data->phone}}" class="form-control" name="phone">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Fax</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->fax}}" class="form-control" name="fax">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">email</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->email}}" class="form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">smtpserver</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->smtpserver}}" class="form-control" name="smtpserver">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">smtpemail</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->smtpemail}}" class="form-control" name="smtpemail">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">smtppassword</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="password"  value="{{$data->smtppassword}}" class="form-control" name="smtppassword">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">smtpport</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="number"  value="{{$data->smtpport}}" class="form-control" name="smtpport">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Facebook</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->facebook}}" class="form-control" name="facebook">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Instagram</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->instagram}}" class="form-control" name="instagram">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Twitter</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->twitter}}" class="form-control" name="twitter">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Youtube</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text"  value="{{$data->youtube}}" class="form-control" name="youtube">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">About Us</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input id="aboutus" value="{{$data->aboutus}}" class="form-control" name="aboutus">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Contact</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input id="contact" value="{{$data->contact}}" class="form-control" name="contact">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">References</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <textarea id="references" name="detail">"{{$data->references}}"</textarea>
                                        </div>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $('#aboutus').summernote();
                                            $('#references').summernote();
                                            $('#contact').summernote();
                                        });
                                    </script>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">
                                            <button type="submit" class="btn btn-success">Upload Setting</button>
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
    <!-- /page content -->
@endsection
