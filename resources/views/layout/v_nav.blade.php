<ul class="sidebar-menu" data-widget="tree">
    @if (auth()->user()->level==1)
    {{-- <li><a href="/home"><i class="fa fa-home"></i> <span>Home</span></a></li> --}}
    <li><a href="/user"><i class="fa fa-user"></i> <span>User</span></a></li>
    <li class="active treeview">
        <a href="#">
        <i class="fa fa-folder"></i> <span>Dashboard</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
          <ul class="treeview-menu">
              <li class="active"><a href="/dataikan"><i class="fa fa-book"></i> <span>Data Ikan</span></a></li>
            <li class="active"><a href="/dataku"><i class="fa fa-book"></i> <span>Dataku</span></a></li>
            <li class="active"><a href="/kapal"><i class="fa fa-book"></i> <span>Kapal</span></a></li>
            <li class="active"><a href="/riwayatbeli"><i class="fa fa-book"></i> <span>Riwayat Beli</span></a></li>
            <li class="active"><a href="/saldo"><i class="fa fa-book"></i> <span>Saldo</span></a></li>
            <li class="active"><a href="/tangkapan"><i class="fa fa-book"></i> <span>Tangkapan</span></a></li>
            <li class="active"><a href="/track"><i class="fa fa-book"></i> <span>Track</span></a></li>
          </ul>
    </li>
        @elseif (auth()->user()->level==2)
         <li><a href="/home"><i class="fa fa-home"></i> <span>Home</span></a></li>
        @endif
</ul>
