@extends('index')

@section('css')
@endsection


@section('content')

    <div class="row">
        <!-- Basic Table -->
        <div class="row mt-25 mb-20">

            <div class="col-md-3 col-xs-12 mt-15">
                <a href="{{route('newLang')}}" class="btn btn-info btn-rounded btn-block btn-anim">
                    <i class="fa fa-pencil"></i>
                    <span class="btn-text">Yeni Dil Əlavə Et</span>
                </a>
            </div>
        </div>


        <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Basic Table</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p class="text-muted">Add class <code>table</code> in table tag.</p>
                        <div class="table-wrap mt-40">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jens</td>
                                        <td>Brincker</td>
                                        <td>Brincker123</td>
                                        <td><span class="label label-danger">admin</span> </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mark</td>
                                        <td>Hay</td>
                                        <td>Hay123</td>
                                        <td><span class="label label-info">member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Anthony</td>
                                        <td>Davie</td>
                                        <td>Davie123</td>
                                        <td><span class="label label-warning">developer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>David</td>
                                        <td>Perry</td>
                                        <td>Perry123</td>
                                        <td><span class="label label-success">supporter</span> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Anthony</td>
                                        <td>Davie</td>
                                        <td>Davie123</td>
                                        <td><span class="label label-info">member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Alan</td>
                                        <td>Gilchrist</td>
                                        <td>Gilchrist123</td>
                                        <td><span class="label label-success">supporter</span> </td>
                                    </tr>
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
