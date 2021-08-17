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
                            <form action="{{route('newLang')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Dilin kodu (hər dilkodu dünyaca qəbul edilmiş şəkildə yazın)</label>
                                    <input type="text" class="form-control"  name="code">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left"  >Dil (hər dili öz dlində yazın)</label>
                                    <input type="text"  name="name" class="form-control" >
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
