@extends('back.layouts.master')
@section('title','Program Düzəliş Et')
@section('content')
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Program and Serial Form</h3>
                <a href="{{route('admin.country')}}" class="btn btn-info btn-xs float-right"><i class="fas fa-undo"></i> Geri Qayıt</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.program.create',$program->id)}}" method="POST">
                   @include('back.layouts.partials.errors')
                   @include('back.layouts.partials.alert')
                @csrf
                <div class="form-group">
                  <div class="col-sm-12">
                <label class="control-label mb-10">TV Kanallar </label>
                 <select  class="form-control filled-input rounded-input" name="channel" required  >

                  @foreach($channels as $channel)
                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                @endforeach
                </select>
                  </div>
              </div>
               <div class="form-group">
                 <div class="col-md-12">
              <label class="control-label mb-10"> Serial yoxsa Veriliş </label>
               <select  class="form-control filled-input rounded-input" name="type" required  >
              <option value="serial">Serial</option>
              <option value="program">Veriliş</option>

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
                <div class="card-body">
                  @foreach($languages as $language)
                <div class="form-group">
                    <label for="">({{$language->name}})</label>
                    <input type="text" class="form-control"  name="country_{{$language->code}}">
                  </div>
                  @endforeach
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

                                 <div class="col-md-12">
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



                             <div class="form-group mb-30 mt-30">
                                 <label class="control-label mb-10 text-left"> Reytinq </label>
                                 <div class="row" >
                                     <div class="col-sm-12">
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
                <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-block">Əlavə Et</button>
                </div>
              </form>
            </div>
@endsection
