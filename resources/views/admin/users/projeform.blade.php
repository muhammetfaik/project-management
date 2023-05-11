@extends('admin.master');

@section('page-title')
    Abramak | Projeler Form
@endsection

@section('content-heading')
    Projeler Form
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Genel Bilgiler
                </div>
                @if(Session::get('regScsMsg'))
                    <div class="alert alert-success">
                        {{ Session::get('regScsMsg') }}
                    </div>
                @endif

                @if(Session::get('regErrMsg'))
                    <div class="alert alert-danger">
                        {{ Session::get('regErrMsg') }}
                    </div>
                @endif
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <form role="form" action="{{ url('projeler') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Firma İsim</label>
                                    <input class="form-control" type="text" name="projeadi" placeholder="Enter name"
                                           autofocus
                                           required>
                                </div>                                    
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
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