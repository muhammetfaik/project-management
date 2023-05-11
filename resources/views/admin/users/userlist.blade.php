@extends('admin.master');

@section('page-title')
    Abramak | Personel Listesi
@endsection

@section('content-heading')
    Personel Listesi
@endsection

@section('main-content')

    {{--{{Session::get('roleMsg')}}--}}
    @if (Session::get('updateUserMsg'))
        <div class="alert alert-success">
            {{ Session::get('updateUserMsg') }}
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

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading role-list-info-header">
                    <p>Personel</p>
                    <a href="{{ url('/registration') }}" class="btn btn-success">Yeni Personel Kaydet</a>
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>S/L</th>
                            <th>İsim</th>
                            <th>Görev</th>
                            <th>Telefon No</th>
                            <th>Email</th>
                            <th>Adres</th>
                            <th>Sil/Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                        @foreach($result as $data)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->rolename }}</td>
                                <td>{{ $data->cell }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->address }}</td>
                                <td class="text-center"><a href="{{ url('updateuser/'.$data->id) }}" class="btn btn-primary">Düzenle</a> <a href="{{ url('deleteuser/'.$data->id) }}" class="btn btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) { return false }">Sil</a> </td>
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
    <!-- /.row (nested) -->


    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });


    </script>
@endsection