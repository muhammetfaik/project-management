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
                    
                 
                    <!-- /.row -->
                    <?php $count = 1; ?>
                    @foreach($result as $data)
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                      <!--  <i class="fa fa-tasks fa-5x"></i>-->
                                    </div>
                                    <div class="col-xs-9 text-right">
                                       <!-- <div class="huge">12</div>-->
                                       <div  style="font-weight: bold; font-size: 50px;">{{ $data->projeadi }}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--$data->projeadi route mantığını /test/:id mantığına dönüştür.-->
                                    <a style="color: black;" href="show/{{$data->projeadi}}" class="pull-left">Stokları İncele</a>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php $count += 1; ?>
                    @endforeach
                <!-- /.row -->
                <!--</div>-->
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
       <button class="btn btn-primary"><a href="{{ url('projeler') }}"> Yeni Proje Ekle</a></button>
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