@extends('admin.master');

@section('page-title')
    Abramak | Stok Ekle
@endsection

@section('content-heading')
    Stok Ekle
@endsection

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Genel Bilgiler
                </div>
                @if(Session::get('stockScsMsg'))
                    <div class="alert alert-success">
                        {{ Session::get('stockScsMsg') }}
                    </div>
                @endif

                @if(Session::get('stockErrMsg'))
                    <div class="alert alert-danger">
                        {{ Session::get('stockErrMsg') }}
                    </div>
                @endif
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('stockin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-lg-6">
                               
                                <div class="form-group">
                                    <label>Parca No</label>
                                    <input type="text" class="form-control" name="parcano" placeholder="Parça No Giriniz"
                                           required>
                                </div>


                                <div class="form-group">
                                    <label>Malzeme Adı</label>
                                    <input type="text" class="form-control" name="malzemeadi" placeholder="Malzeme Adı Giriniz"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label>Miktar</label>
                                    <input type="int" class="form-control" name="miktar" placeholder="Miktar Giriniz"
                                           required>
                                </div>

                          
                                
                                <div class="form-group">
                                    <label>Açıklama</label>
                                    <textarea class="form-control" name="note" rows="3"></textarea>
                                </div>
                                
                              
                               
                                <div class="form-group">
                                    <label>Marka</label>
                                    <input type="text" class="form-control" name="marka" placeholder="Marka Giriniz"
                                           required>
                                           
                                    
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" class="form-control" name="model" placeholder="Model Giriniz"
                                           required>
                                </div>
                               
                                <div class="form-group">
                                    <label>Sağlayıcı Adı</label>
                                    <select class="form-control" name="supname" required>
                                        <option value="" required>Select</option>
                                        @foreach($record as $rec)
                                            <option >{{ $rec->projeadi }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Seri No</label>
                                    <input type="text" class="form-control" name="serino" placeholder="Seri No Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Fiyat</label>
                                    <input type="int" class="form-control" name="fiyat" placeholder="Fiyat Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Tedarikçi</label>
                                    <input type="text" class="form-control" name="tedarikci" placeholder="Tedarikçi Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Sipariş Veren</label>
                                    <input type="text" class="form-control" name="siparisveren" placeholder="Sipariş Veren İsim"
                                           required>
                                </div>                        
                                
                                <!--<div class="form-group">
                                    <label>Sağlayıcı Adı</label>
                                    <select class="form-control" name="supname" required>
                                        <option value="" required>Select</option>
                                        {{-- @foreach($registration as $reg) --}}  
                                            <option value="{{-- $reg->id --}}">{{-- $reg->name --}}</option>
                                        {{--  @endforeach --}} 
                                    </select>
                                    <br>
                                   
                                </div>-->
                                <div class="form-group">
                                    <label>Proje Adı</label>
                                    <input type="text" class="form-control" name="projeadi" placeholder="Sipariş Veren İsim"
                                           required>
                                </div>
                                
                                <a href="{{ url('registration') }}" class="btn btn-primary">+ Yeni Sağlayıcı Ekle</a>
                            
                            <button type="submit" class="btn btn-primary">+ Yeni Stok Ekle</button>

                            </div>
                           

                        </form>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
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