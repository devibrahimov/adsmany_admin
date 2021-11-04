@extends('index')

@section('css')
@endsection


@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Basic Form</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="{{route('contact.update',$contact->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Ad </label>
                                    <input type="text" class="form-control"  name="name" value="{{old('name',$contact->name)}}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left"  >Email</label>
                                    <input type="email"  name="email" class="form-control" value="{{old('email',$contact->email)}}">
                                </div>
                                 <div class="form-group">
                                    <label class="control-label mb-10 text-left"  >Phone</label>
                                    <input type="text"  name="phone" class="form-control" value="{{old('phone',$contact->phone)}}">
                                </div>
                                 <div class="form-group">
                                    <label class="control-label mb-10 text-left"  >Adress</label>
                                    <input type="text"  name="adress" class="form-control" value="{{old('adress',$contact->adress)}}">
                                </div>
                                     <div class="form-group">
                                            <label class="control-label mb-10">Map</label>
                                            <textarea name="map" class="form-control  mt-10"cols="30" rows="8">{{old('map',$contact->map)}}</textarea>
                                        </div>
                                <button type="submit" class="btn btn-info btn-rounded btn-block btn-anim">
                                    <i class="fa fa-plus"></i>
                                    <span class="btn-text">Əlavə Et</span>
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
@endsection
