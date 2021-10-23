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
                            <form action="{{route('newProgram')}}" method="post" class="mt-25 mb-25" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label mb-10">TV Kanallar </label>
                                            <select  class="form-control filled-input rounded-input" name="channel" required  >

                                                @foreach($channels as $channel)
                                                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label mb-10"> Serial yoxsa Veriliş </label>
                                            <select  class="form-control filled-input rounded-input" name="type" required  >
                                                    <option value="serial">Serial</option>
                                                    <option value="program">Veriliş</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-30">
                                            <label class="control-label mb-10 text-left">Şəkil</label>
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-addon fileupload btn btn-default btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">fayl seçin</span> <span class="fileinput-exists btn-text">Dəyiş</span>
														<input type="file" required name="image" accept="image"  >
														</span> <a href="#" class="input-group-addon btn btn-default btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Çıxart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                         <div class="mb-50 mt-20" style="border: 1px solid black; padding: 10px ;">

                             <div class="form-group mb-30">
                                 <label class="control-label mb-10 text-left">Haftə içi Yayın günləri</label>
                                 <div class="row ml-5 ">

                                     <div class="col-md-1 checkbox checkbox-danger">
                                         <input id="checkbox1" type="checkbox" value="1"  name="day[]">
                                         <label for="checkbox1"> B.e. </label>
                                     </div>
                                     <div class="col-md-1 checkbox checkbox-danger">
                                         <input id="checkbox2" type="checkbox" value="2"  name="day[]">
                                         <label for="checkbox2"> Ç.a. </label>
                                     </div>
                                     <div class="col-md-1 checkbox checkbox-danger">
                                         <input id="checkbox3" type="checkbox" value="3"  name="day[]">
                                         <label for="checkbox3"> Ç. </label>
                                     </div>
                                     <div class="col-md-1 checkbox checkbox-danger">
                                         <input id="checkbox4" type="checkbox" value="4"  name="day[]">
                                         <label for="checkbox4"> C.a. </label>
                                     </div>
                                     <div class="col-md-1 checkbox checkbox-danger">
                                         <input id="checkbox5" type="checkbox" value="5"  name="day[]">
                                         <label for="checkbox5"> C. </label>
                                     </div>
                                     <div class="col-md-1 checkbox checkbox-danger">
                                         <input id="checkbox6" type="checkbox" value="6"  name="day[]">
                                         <label for="checkbox6"> Ş. </label>
                                     </div>
                                     <div class="col-md-1 checkbox checkbox-danger">
                                         <input id="checkbox7" type="checkbox" value="7"  name="day[]">
                                         <label for="checkbox7"> B. </label>
                                     </div>

                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <label class="control-label mb-10">Başlama Saatı</label>
                                             <input type="time" class="form-control filled-input rounded-input" required   name="start_time">
                                         </div>
                                         <div class="col-md-6">
                                             <label class="control-label mb-10">Bitmə Saatı</label>
                                             <input type="time" class="form-control filled-input rounded-input" required  name="finish_time">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-8">

                                 </div>
                             </div>

                             <div class="form-group mb-30 mt-30">
                                 <label class="control-label mb-10 text-left"> Reytinq </label>
                                 <div class="row" >
                                     <div class="col-sm-3">
                                         <input type="text" class="form-control filled-input rounded-input" required   name="rating">
                                     </div>
                                 </div>
                             </div>
                         </div>

                                <div class="row" >
                                    @foreach($languages as $language)
                                        <div class="col-sm-3">
                                            <label class="control-label mb-10">({{$language->name}})</label>
                                            <input type="text" class="form-control filled-input rounded-input"  name="name_{{$language->code}}">
                                            <textarea name="about_of_{{$language->code}}" class="form-control  mt-10"cols="30" rows="8"></textarea>
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
