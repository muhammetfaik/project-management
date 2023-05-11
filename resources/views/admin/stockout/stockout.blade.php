@extends('admin.master');

@section('page-title')
    Abramak | Stok Yok Bilgileri
@endsection

@section('content-heading')
    Stok Yok Bilgileri
@endsection

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Genel Bilgiler
                </div>
                @if(Session::get('stockOutScsMsg'))
                    <div class="alert alert-success">
                        {{ Session::get('stockOutScsMsg') }}
                    </div>
                @endif

                @if(Session::get('stockOutErrMsg'))
                    <div class="alert alert-danger">
                        {{ Session::get('stockOutErrMsg') }}
                    </div>
                @endif
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('stockout') }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Sağlayıcı Adı</label>
                                        <select class="form-control" name="supname" required>
                                            <option value="" required>Select</option>
                                            @foreach($registration as $reg)
                                                <option value="{{ $reg->id }}">{{ $reg->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                       
                                    </div>
                                  
                                </div>

                                <div class="form-group">
                                    <label>Parça No</label>
                                    <input type="text" class="form-control" name="parcano"
                                           placeholder="Parça No Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Malzeme Adı</label>
                                    <input type="text" class="form-control" name="malzemeadi"
                                           placeholder="Malzeme Adı Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Miktar</label>
                                    <input type="text" class="form-control" name="miktar"
                                           placeholder="Miktar Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Marka</label>
                                    <input type="text" class="form-control" name="marka"
                                           placeholder="Marka Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" class="form-control" name="model"
                                           placeholder="Model Giriniz"
                                           required>
                                </div>
                                <div class="row">
                                    <label>Fiyat</label>
                                    <input type="text" class="form-control" name="fiyat"
                                           placeholder="Fiyat Giriniz"
                                           required>
                                  
                                </div>
                                <div class="form-group">
                                    <label>Seri No</label>
                                    <input type="text" class="form-control" name="serino"
                                           placeholder="Seri No Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Tedarikçi</label>
                                    <input type="text" class="form-control" name="tedarikci"
                                           placeholder="Tedarikçi Firma Giriniz"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Sipariş Veren</label>
                                    <input type="text" class="form-control" name="siparisveren"
                                           placeholder="Tedarikçi Firma Giriniz"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label>Proje Adı</label>
                                    <input type="text" class="form-control" name="projeadi"
                                           placeholder="Proje Adını Giriniz"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label>Not</label>
                                    <input type="text" class="form-control" name="note"
                                           placeholder="Not Giriniz"
                                           required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary pull-right" style="margin-top: 25px;">+ 
                                    Stokta Yok Oluştur
                                </button>
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

    <script>

        function rentCalculation() {
            var typecost = document.getElementById('typecost').value;
            var tweight = document.getElementById('tweight').value;
            document.getElementById('totalcost').value = typecost * tweight;
        }

        jQuery(document).ready(function () {

            //Supplier -> lotname

            jQuery('select[name="supname"]').on('change', function () {
                var supplierID = jQuery(this).val();

                if (supplierID) {
                    jQuery.ajax({
                        url: 'stockout/getlot/' + supplierID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            jQuery('select[name="lotname"]').empty();
                            jQuery.each(data, function (key, value) {
                                $('select[name="lotname"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="lotname"]').empty();
                }
            });

            //selltype -> typecost

            jQuery('select[name="selltype"]').on('change', function () {
                var sellID = jQuery(this).val();

                if (sellID) {
                    jQuery.ajax({
                        url: 'stockout/gettypecost/' + sellID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            jQuery('input[name="typecost"]').empty();
                            jQuery.each(data, function (key, value) {
                                $('input[name="typecost"]').val(value);
                            });
                        }
                    });
                } else {
                    $('input[name="typecost"]').val("");
                }
            });

        });
    </script>

@endsection


