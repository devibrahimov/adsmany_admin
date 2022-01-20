@extends('back.layouts.master')
@section('title','TV Channel Düzəliş Et')
@section('content')
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">TV Channel Form</h3>
                <a href="{{route('admin.tv')}}" class="btn btn-info btn-xs float-right"><i class="fas fa-undo"></i> Geri Qayıt</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.tv.update',$channel->id)}}" method="POST" enctype="multipart/form-data">
                   @include('back.layouts.partials.errors')
                   @include('back.layouts.partials.alert')
                @csrf

                <div class="card-body">

                 <div class="form-group">
                   <div class="col-sm-12">
                    <label for="">Ölkə</label>
                    <select name="country" id="" class="form-control">
                      <option disabled selected>Ölkə Seç</option>
                      @foreach($countries as $country)
                      <option {{$channel->country_id == $country->id?'selected':''}} value="{{$country->id}}">{{$country->name}}</option>
                      @endforeach
                    </select>
                   </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                    <label for="">Logo</label>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                      <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                      <span class="input-group-addon fileupload btn btn-default btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">fayl seçin</span> <span class="fileinput-exists btn-text">Dəyiş</span>
											<input type="file" required name="logo" accept="image/png"  >
											</span> <a href="#" class="input-group-addon btn btn-default btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Çıxart</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                   <div class="col-sm-12">
                     <label > Hazırda olan logo </label>
                     <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <img src="{{$channel->logo}}" width="72px" alt="">
                    </div>
                   </div>
                  </div>
                  <div class="form-group">
                     @foreach($languages as $language)
                     <div class="col-sm-12">
                      <label class="control-label mb-10">({{$language->name}})</label>
                      <input type="text" class="form-control filled-input rounded-input"
                                                   value="{{tvchannel($channel_contents,$language->code)}}" name="channel_{{$language->code}}">
                      </div>
                    @endforeach
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-block">Əlavə Et</button>
                </div>
              </form>
            </div>
@endsection
