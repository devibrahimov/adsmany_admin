@extends('index')

@section('css')
    <!-- select2 CSS -->
    <link href="/vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>


    <!-- bootstrap-select CSS -->
    <link href="/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

@endsection


@section('content')
    <div class="row">
        <div class="col-sm-12  ">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Yeni Tv Kanal yarat</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="{{route('newChannels')}}" method="post" class="mt-25 mb-25" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label mb-10">Ölkə </label>
                                                <select  class="form-control filled-input rounded-input" name="country" required  >
                                                <option disabled selected>Ölkə Seç</option>
                                                @foreach($countries as $country)
                                                  <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                                </select>

                                    </div>
                                 </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-30">
                                            <label class="control-label mb-10 text-left">Logo</label>
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-addon fileupload btn btn-default btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">fayl seçin</span> <span class="fileinput-exists btn-text">Dəyiş</span>
														<input type="file" required name="logo" accept="image/png"  >
														</span> <a href="#" class="input-group-addon btn btn-default btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Çıxart</span></a>
                                            </div>
                                        </div>
                                </div>
                                </div>
                                <div class="row" >
                                    @foreach($languages as $language)
                                        <div class="col-sm-3">
                                            <label class="control-label mb-10">({{$language->name}})</label>
                                            <input type="text" class="form-control filled-input rounded-input"  name="channel_{{$language->code}}">
                                        </div>
                                    @endforeach
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded btn-block btn-anim mt-15">
                                    <i class="fa fa-plus"></i>
                                    <span class="btn-text">Sistemə Əlavə Et</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <!-- Switchery JavaScript -->
    <script src="/vendors/bower_components/switchery/dist/switchery.min.js"></script>

    <!-- Select2 JavaScript -->
    <script src="/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- Bootstrap Select JavaScript -->
    <script src="/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

@endsection
