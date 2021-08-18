@extends('index')

@section('css')
@endsection


@section('content')
    <div class="row">
        <div class="col-sm-12  ">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Redaktə Səhifəsi</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="{{route('CountryEdit',$id)}}" method="post" class="mt-25 mb-25">
                                @csrf
                                <div class="row">
                                    @foreach($languages as $language)
                                        <div class="col-sm-3">
                                            <label class="control-label mb-10">({{$language->name}})</label>
                                            <input type="text" class="form-control filled-input rounded-input"  name="country_{{$language->code}}"
                                            value="{{country($country,$language->code)}}">
                                        </div>
                                    @endforeach
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded btn-block btn-anim mt-15">
                                    <i class="fa fa-plus"></i> <span class="btn-text">Əlavə Et</span>
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
