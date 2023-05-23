@extends('admin.master');

@section('page-title')
    Abramak | Stok Güncelleme Formu
@endsection

@section('content-heading')
    Stok Güncelleme Formu
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
                        <form role="form" action="{{ url('updatestockin/'.$stcInData->id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-lg-6">
                               
                                <div class="form-group">
                                    <label>Parca No</label>
                                    <input type="text" class="form-control" name="parcano"
                                    value="{{ $stcInData->parcano }}"
                                    required>
                                </div>


                                <div class="form-group">
                                    <label>Malzeme Adı</label>
                                    <input type="text" class="form-control" name="malzemeadi"
                                    value="{{ $stcInData->malzemeadi }}"
                                    required>
                                </div>

                                <div class="form-group">
                                    <label>Miktar</label>
                                    <input type="int" class="form-control" name="miktar" value="{{ $stcInData->miktar }}"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label>Kritik Seviye</label>
                                    <input type="int" class="form-control" name="kritikseviye" value="{{ $stcInData->kritikseviye }}"
                                           required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Açıklama</label>
                                    <textarea class="form-control" name="note" value="{{ $stcInData->note }}" rows="3"></textarea>
                                </div>
                                
                              
                               
                                <div class="form-group">
                                    <label>Marka</label>
                                    <input type="text" class="form-control" name="marka" value="{{ $stcInData->marka }}"
                                           required>
                                           
                                    
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" class="form-control" name="model" value="{{ $stcInData->model }}"
                                           required>
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
                                    <label>Seri No</label>
                                    <input type="text" class="form-control" name="serino" value="{{ $stcInData->serino }}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Fiyat</label>
                                    <input type="int" class="form-control" name="fiyat" value="{{ $stcInData->fiyat }}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Tedarikçi</label>
                                    <input type="text" class="form-control" name="tedarikci" value="{{ $stcInData->tedarikci }}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Sipariş Veren</label>
                                    <input type="text" class="form-control" name="siparisveren" value="{{ $stcInData->siparisveren }}"
                                           required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Proje Adı</label>
                                    <input type="text" class="form-control" name="projeadi" value="{{ $stcInData->projeadi }}"
                                           required>
                                </div>
                                <button type="submit" class="btn btn-primary"> Stoğu Güncelle</button>
                        </form>
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