@extends('admin.master');

@section('page-title')
    Abramak | Stok Listesi
@endsection

@section('content-heading')
    Stok Listesi
@endsection

@section('main-content')
    {{--{{Session::get('roleMsg')}}--}}
    @if (Session::get('updateStockInMsg'))
        <div class="alert alert-success">
            {{ Session::get('updateStockInMsg') }}
        </div>
    @endif

    @if (Session::get('deleteStockMsg'))
        <div class="alert alert-success">
            {{ Session::get('deleteStockMsg') }}
        </div>
    @endif

    @if (Session::get('errDeleteStockInMsg'))
        <div class="alert alert-danger">
            {{ Session::get('errDeleteStockInMsg') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading role-list-info-header">
                    <p>Stok Listesi</p>
                    <a href="{{ url('/stockin') }}" class="btn btn-success">+ Stok Ekle</a>
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Parça No</th>
                            <th>Malzeme Adi</th>
                            <th>Miktar</th>
                            <th>Marka</th>
                            <th>Model</th>
                            <th>Proje Adi</th>
                            <th>Seri No</th>
                            <th>Fiyat</th>
                            <th>Tedarikci</th>
                            <th>Siparis Veren</th>
                            <th>Tarih</th>
                            <th>Sil/Düzenle</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                        @foreach($result as $data)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $data->parcano }}</td>
                                <td>{{ $data->malzemeadi }}</td>
                                <td>{{ $data->miktar }}<div>{{ $data->miktarasildi }}</div></td>
                                <td>{{ $data->marka }}</td>
                                <td>{{ $data->model }}</td>
                                <td>{{ $data->projeadi }}</td>
                                <td>{{ $data->serino }}</td>
                                <td>{{ $data->fiyat }}</td>
                                <td>{{ $data->tedarikci }}</td>
                                <td>{{ $data->siparisveren }}</td>
                                <td>{{ $data->created_at }}</td>
                                
                                

                                <td class="text-center"><a href="{{ url('updatestockin/'.$data->id) }}" class="btn btn-primary">Düzenle</a> <a href="{{ url('deletestockin/'.$data->id) }}" class="btn btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) { return false }">Sil</a> </td>
                                <?php $count += 1; ?>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });


    </script>
@endsection