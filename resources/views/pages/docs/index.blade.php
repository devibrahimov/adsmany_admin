@extends('index')

@section('css')

@endsection


@section('content')
    <div class="row">
        <div class="col-sm-12  ">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="">
                            <div class="col-lg-3 col-md-4 file-directory pa-0">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content">
                                        <div class="file-manager">
                                            <div class="ma-15">
                                                <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-orange btn-sm btn-block">
                                                    Yeni ƏLavə Et
                                                </a>
                                            </div>
                                            <div class="pl-15 mb-30">
                                                <a href="#" class="file-control active"> Aşağıdakı başlıqlar Api url başlıqlarıdır</a>
                                            </div>

                                            <h6 class="mb-10 pl-15">Folders</h6>
                                            <ul class="folder-list mb-30">
                                                <li class="active"><a href=""><i class="zmdi zmdi-folder"></i> Giriş</a></li>
                                                <li><a href=""><i class="zmdi zmdi-folder"></i>Agency Qeydiyyat </a></li>
                                                <li><a href=""><i class="zmdi zmdi-folder"></i>Agency Giriş</a></li>
                                                <li><a href=""><i class="zmdi zmdi-folder"></i>Agency Çıxış</a></li>
                                                <li><a href=""><i class="zmdi zmdi-folder"></i></a></li>
                                                <li><a href=""><i class="zmdi zmdi-folder"></i> Books</a></li>
                                            </ul>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 file-sec pt-15">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                        {{-- DBdan neticelerin geldiyi alan --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Yeni ƏLavə Et</h4>
                </div>

                <div class="modal-body">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Name *</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label"> Method</label>
                            <div class="col-lg-10">
                                <select name="method"  class="form-control">
                                    <option value="get">Get</option>
                                    <option value="post">Post</option>
                                    <option value="put">Put</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label"> Url (ana urlden sonrası)</label>
                            <div class="col-lg-10">
                                <input type="text" name="url"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Header_data</label>
                            <div class="col-lg-10">
                                <input type="text" name="header_data"   class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" style="margin-right:30px; "> Login olmalidir ? </label>
                            <div class="radio radio-info">
                                <input type="radio" name="radio" id="radio1" value="yes" checked="">
                                <label for="radio1">
                                    Bəli
                                </label>
                            </div>
                            <div class="radio radio-info">
                                <input type="radio" name="radio" id="radio2" value="no" checked="">
                                <label for="radio2">
                                    Xeyir
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Açıqlama</label>
                            <div class="col-lg-10">
                                <textarea class="textarea_editor form-control" rows="5" placeholder="Enter text ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Göndəriləcək data </label>
                            <div class="col-lg-10">
                                <textarea class="textarea_editor form-control" rows="15" style="background-color: #0c0c0c;color: #b3d4fc" placeholder="Enter text ...">{}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Geri dönəcək Response </label>
                            <div class="col-lg-10">
                                <textarea class="textarea_editor form-control" rows="15" style="background-color: #0c0c0c;color: #b3d4fc" placeholder="Enter text ...">{}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-default" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

@section('js')

@endsection
