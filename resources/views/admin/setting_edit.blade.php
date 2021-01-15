@extends('layouts.admin')

@section('title', 'Settings')
@section('javascript')

    <!--Ckeditör-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12">
                <form role="form" action="{{route('admin_setting_update')}}" enctype="multipart/form-data" method="post" class="form-horizontal form-label-left">
                    @csrf

                    <input type="hidden" id="id" value="{{$setting->id}}" class="form-control" name="id">
                    <br>
                    <div class="form-group row ">


                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">General</font></font></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="smtp-tab" data-toggle="tab" href="#smtp" role="tab" aria-controls="smtp" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Smtp mail</font></font></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Social Media</font></font></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About Us</font></font></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact Page</font></font></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="references-tab" data-toggle="tab" href="#references" role="tab" aria-controls="references" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">References</font></font></a>
                            </li>
                        </ul>



                        <div class="tab-content" id="myTabContent">
                            {{--                            general site settings--}}

                            <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">

                                <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" id="title" value="{{$setting->title}}" class="form-control" name="title">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">Keywords</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" value="{{$setting->keywords}}" class="form-control" name="keywords">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" value="{{$setting->description}}" class="form-control" name="description">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">company</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" value="{{$setting->company}}" class="form-control" name="company">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">address</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" value="{{$setting->address}}" class="form-control" name="address">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">phone</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="number" value="{{$setting->phone}}" class="form-control" name="phone">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">Fax</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->fax}}" class="form-control" name="fax">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">email</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->email}}" class="form-control" name="email">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <select class="form-control" name="status">
                                        <option selected="selected">{{$setting->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>

                            {{--                            smtp type settings--}}

                            <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
                                <label class="control-label col-md-3 col-sm-3 ">smtpserver</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->smtpserver}}" class="form-control" name="smtpserver">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">smtpemail</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->smtpemail}}" class="form-control" name="smtpemail">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">smtppassword</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="password"  value="{{$setting->smtppassword}}" class="form-control" name="smtppassword">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">smtpport</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="number"  value="{{$setting->smtpport}}" class="form-control" name="smtpport">
                                </div>
                            </div>

                            {{--                            social media settings--}}

                            <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                <label class="control-label col-md-3 col-sm-3 ">Facebook</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->facebook}}" class="form-control" name="facebook">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">Instagram</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->instagram}}" class="form-control" name="instagram">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">Twitter</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->twitter}}" class="form-control" name="twitter">
                                </div>

                                <label class="control-label col-md-3 col-sm-3 ">Youtube</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text"  value="{{$setting->youtube}}" class="form-control" name="youtube">
                                </div>
                            </div>

                            {{--about us settings--}}
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <label class="control-label col-md-3 col-sm-3 ">About Us</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input id="aboutus" value="{{$setting->aboutus}}" class="form-control" name="aboutus">
                                </div>
                            </div>
                            {{--contact us se
                            ttings--}}
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <label class="control-label col-md-3 col-sm-3 ">Contact</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input id="contact" value="{{$setting->contact}}" class="form-control" name="contact">
                                </div>
                            </div>

                            {{--references settings--}}
                            <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="references-tab">
                                <label class="control-label col-md-3 col-sm-3 ">References</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea id="references" class="ckeditor" name="detail">"{{$setting->references}}"</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3  offset-md-9">
                            <button type="submit" class="btn btn-success">Upload Settings</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /page content over -->
@endsection
