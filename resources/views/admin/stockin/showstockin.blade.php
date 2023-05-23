@extends('admin.master');

@section('page-title')
    Abramak | Stok Açıklama Formu
@endsection

@section('content-heading')
    Stok Açıklama Formu
@endsection

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Stokta Bilgileri
                </div>
                @if(Session::get('errUpdateStockInMsg'))
                    <div class="alert alert-danger">
                        {{ Session::get('errUpdateStockInMsg') }}
                    </div>
                @endif
                <div class="panel-body">
                    <div class="row">
                            {{ csrf_field() }}
                            <div class="col-lg-6">
                               
                                <div class="form-group">
                                    <label>Parca No:</label>
                                    <label type="text" class="form-control" name="parcano">{{ $result[0]->parcano }}</label>
                                </div>


                                <div class="form-group">
                                    <label>Malzeme Adı:</label>
                                    <label type="text" class="form-control" name="malzemeadi">{{ $result[0]->malzemeadi }}</label>
                                </div>

                                <div class="form-group">
                                    <label>Miktar:</label>
                                    <label type="int" class="form-control" name="miktar">{{ $result[0]->miktar }}</label>
                                </div>

                                <div class="form-group">
                                    <label>Kritik Seviye:</label>
                                    <label type="int" class="form-control" name="kritikseviye">{{ $result[0]->kritikseviye }}</label>
                                </div>
                                
                                <div class="form-group">
                                    <label>Açıklama:</label>
                                    <label class="form-control" name="note"  rows="3">{{ $result[0]->note }}</label>
                                </div>
                                
                              
                               
                                <div class="form-group">
                                    <label>Marka:</label>
                                    <label type="text" class="form-control" name="marka">{{ $result[0]->marka }}</label>
                                           
                                    
                                </div>
                                <div class="form-group">
                                    <label>Model:</label>
                                    <label type="text" class="form-control" name="model">{{ $result[0]->model }}</label>
                                </div>
                               
                                <!--<div class="form-group">
                                    <label>Sağlayıcı Adı</label>
                                    <select class="form-control" name="supname" required>
                                        <option value="" required>Select</option>
                                        {{--@foreach($record as $rec)
                                            <option >{{ $rec->projeadi }}</option>
                                        @endforeach --}}
                                    </select>
                                    <br>
                                   
                                </div>-->
                                <div class="form-group">
                                    <label>Seri No:</label>
                                    <label type="text" class="form-control" name="serino">{{ $result[0]->serino }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Fiyat:</label>
                                    <label type="int" class="form-control" name="fiyat">{{ $result[0]->fiyat }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Tedarikçi:</label>
                                    <label type="text" class="form-control" name="tedarikci">{{ $result[0]->tedarikci }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Sipariş Veren:</label>
                                    <label type="text" class="form-control" name="siparisveren">{{ $result[0]->siparisveren }}</label>
                                </div>
                                
                                <div class="form-group">
                                    <label>Proje Adı:</label>
                                    <label type="text" class="form-control" name="siparisveren">{{ $result[0]->projeadi }}</label>

                                </div>
                            </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection