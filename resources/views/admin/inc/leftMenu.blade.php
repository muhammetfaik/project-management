<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
                
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Ana Sayfa</a>
            </li>
            <li>
                <a href="{{ url('users') }}"><i class="fa fa-dashboard fa-fw"></i> Personel</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Projeler<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        
                    </li>
                    <li>
                        <a href="{{ url('role') }}"><i class="fa fa-sitemap fa-fw"></i> Projeler</a>
                    </li>
                    <!--<li>
                        <a href="{{ url('projeler') }}"><i class="fa fa-sitemap fa-fw"></i> Yeni Proje Ekle</a>
                    </li>-->
                </ul>
            
                
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Stok<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('stockin') }}"><i class="fa fa-edit fa-fw"></i>Stok Ekle</a>
                    </li>
                    <li>
                        <a href="{{ url('stockinlist') }}"><i class="fa fa-edit fa-fw"></i> Stok Listesi</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Stokta Yok<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('stockout') }}"><i class="fa fa-edit fa-fw"></i> Stokta Yok Ekle</a>
                    </li>
                    <li>
                        <a href="{{ url('stockoutlist') }}"><i class="fa fa-edit fa-fw"></i> Stokta Yok Listesi</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ url('registration') }}"><i class="fa fa-user fa-fw"></i> Kayıt</a>
            </li>
            <li>
                <a href="{{ url('registration') }}"><i class="fa fa-user fa-fw"></i> Log Kaydı</a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
