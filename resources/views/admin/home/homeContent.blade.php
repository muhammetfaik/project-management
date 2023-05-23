@extends('admin.master')

@section('page-title')
    Abramak Dashboard
@endsection

@section('content-heading')
    Göstege Paneli
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-8">

            <!-- /.panel -->
            <div class="panel panel-default">
               
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-9 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight: 3px bold; font-size: 30px;">Ana Sayfa</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-3 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight:6px bold; font-size: 40px;">Personel</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-6 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight: bold; font-size: 27px;"> Projeler Listesi </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-9">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-9 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight: bold; font-size: 28px;">Yeni Proje Gir</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-9">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-9 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight: bold; font-size: 28px;">Stok Listesi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-9">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-9 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight: bold; font-size: 28px;">Stok Listesi Gir</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-9">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-9 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight: bold; font-size: 28px;">Stokta Yok Listesi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-9">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                              <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                            </div>
                                            <div class="col-xs-9 text-right">
                                               <!-- <div class="huge">12</div>-->
                                               <div  style="font-weight: bold; font-size: 28px;">Stokta Yok Ekle</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Sayfaya Git</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                   <!-- </div> -->
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
  
        <!-- /.col-lg-4 -->
    </div>
@endsection