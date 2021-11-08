@extends('index')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12  ">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                            <div  class="pills-struct vertical-pills mt-40">

                               <div class="row">
                                   <div class="col-sm-12" style="margin: 10px">
                                       <ul role="tablist" class="nav nav-pills ver-nav-pills" id="myTabs_10">
                                           <li >
                                               <a href="#myModal" data-toggle="modal" style="color: white" class="btn btn-primary btn-sm btn-block">Yeni ƏLavə Et </a>
                                           </li>
                                           <li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_10" href="#home_10">active</a></li>
                                           <li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_10" role="tab" href="#profile_10" aria-expanded="false">Istifadeci Girish hisse sGirish hissesi</a></li>
                                       </ul>
                                       <div class="tab-content" id="myTabContent_10">
                                           <div  id="home_10" class="tab-pane fade active in" role="tabpanel">
                                               <p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
                                           </div>
                                           <div  id="profile_10" class="tab-pane fade" role="tabpanel">
                                               <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                                           </div>
                                           <div  id="dropdown_19" class="tab-pane fade " role="tabpanel">
                                               <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                           </div>
                                           <div  id="dropdown_20" class="tab-pane fade" role="tabpanel">
                                               <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
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
                            <label class="col-lg-2 control-label"> Url (domaindən sonrası)</label>
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
                                <button class="btn btn-default" type="submit">Yadda Saxla</button>
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
