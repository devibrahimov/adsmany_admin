@extends('index')

@section('css')
@endsection


@section('content')
    <div class="row">
        <!-- Basic Table -->
        <div class="row mt-25 mb-20">
            <div class="col-md-3 col-xs-12 mt-15">
                <a href="{{route('contact.create')}}" class="btn btn-info btn-rounded btn-block btn-anim">
                    <i class="fa fa-pencil"></i>
                    <span class="btn-text">Yeni Program Əlavə Et</span>
                </a>
            </div>
        </div>


        <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Tv Kanallar</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap mt-40">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Adress</th>
                                        <th>Phone </th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contact as $con)
                                        <tr>
                                            <td>{{$con->id}}</td>
                                            <td>{{$con->name}}</td>
                                            <td>{{$con->email}}</td>
                                            <td>{{$con->adress}}</td>
                                         
                                            <td>{{$con->phone}}</td>
                                            <td>
                                                <a href="{{route('contact.edit',$con->id)}}" class="label label-danger"><i class="fa fa-pencil"> </i> Redaktə Et</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Basic Table -->
    </div>
@endsection


@section('js')
@endsection
