@extends('admin.master');

@section('page-title')
    Abramak | Demirbaş
@endsection

@section('content-heading')
    Demirbaş
@endsection

@section('main-content')
 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                {{--{{Session::get('roleMsg')}}--}}
                @if (Session::get('updateRoleMsg'))
                    <div class="alert alert-success">
                        {{ Session::get('updateRoleMsg') }}
                    </div>
                @endif

                @if (Session::get('deleteRoleMsg'))
                    <div class="alert alert-success">
                        {{ Session::get('deleteRoleMsg') }}
                    </div>
                @endif

                @if (Session::get('errDeleteRoleMsg'))
                    <div class="alert alert-danger">
                        {{ Session::get('errDeleteRoleMsg') }}
                    </div>
                @endif
                <!--<div id="page-wrapper">-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!--<h1 class="page-header"></h1>-->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div id="ornek" class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                          <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                        </div>
                                        <div class="col-xs-9 text-right">
                                           <!-- <div class="huge">12</div>-->
                                           <div  style="font-weight: bold; font-size: 50px;">LİBYA</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a style="color: black;" href="{{ route('showlibyaelliyedimetre') }}" class="pull-left">Stokları İncele</a>
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
                                        <div class="col-xs-9 text-right">
                                           <!-- <div class="huge">12</div>-->
                                           <div  style="font-weight: bold; font-size: 50px;">AGEM</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a style="color: black;" href="{{ route('showagem') }}" class="pull-left">Stokları İncele</a>                                        
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
                                           <div  style="font-weight: bold; font-size: 27px;">NİJERYA OPV</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a style="color: black;" href="{{ route('shownijeryaopv') }}" class="pull-left">Stokları İncele</a>                                        
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
                                           <div  style="font-weight: bold; font-size: 28px;">UKRAYNA KORVET-1</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a style="color: black;" href="{{ route('showukraynakorvetbir') }}" class="pull-left">Stokları İncele</a>                                        
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
                                           <div  style="font-weight: bold; font-size: 28px;">UKRAYNA KORVET-2</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a style="color: black;" href="{{ route('showukraynakorvetiki') }}" class="pull-left">Stokları İncele</a>                                        
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
                                           <div  style="font-weight: bold; font-size: 28px;">YENİ PROJE</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Stokları İncele</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                      
                    </div>
                    <!-- /.row -->
               
                <!-- /.row -->
                <!--</div>-->
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
       <button onclick="createClick()"  class="btn btn-primary">Proje Ekle</button>
    </div>

    <script>
    $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });

       
        function createClick()
        {
            const p = document.createElement('div');

            p.textContent = "Some text";
            p.setAttribute('id','element-insert');
            p.setAttribute('class','text-normal padding');

            document.getElementById('ornek').append(p);
        }
    
    </script>
@endsection