@extends('admin.master');

@section('page-title')
    Abramak | Demirbaş
@endsection

@section('content-heading')
    Demirbaş
@endsection

@section('main-content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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
    </head>
    <body>
        <?php $count = 1; ?>
        @foreach($sonuc as $data)
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                          <!--  <i class="fa fa-tasks fa-5x"></i>-->
                        </div>
                        <div class="col-xs-9 text-right">
                           <!-- <div class="huge">12</div>-->
                           <div  style="font-weight: bold; font-size: 50px;">{{ strtoupper($data->projeadi) }}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <a style="color: black;" href="{{ route('show' .$data->projeadi) }}" class="pull-left">Stokları İncele</a>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php $count += 1; ?>
        @endforeach
        <button   href="{{ url('projeler') }}" class="btn btn-primary">Proje Ekle</button>
        <button href="{{ url('projeler') }}" class="btn btn-primary">Yeni Proje Ekle</button>
    </body>
    </html>
   
@endsection