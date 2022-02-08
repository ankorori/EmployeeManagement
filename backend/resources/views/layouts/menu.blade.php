{{-- <li class="nav-item {{ Request::is('departments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('departments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>所属</span>
    </a>
</li> --}}
{{-- <li class="nav-item {{ Request::is('employees*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('employees.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>社員リスト</span>
    </a>
</li> --}}
{{-- <li class="nav-item {{ Request::is('pcos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pcos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>PC_OS</span>
    </a>
</li> --}}
{{-- <li class="nav-item {{ Request::is('pcAccounts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pcAccounts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pc Accounts</span>
    </a>
</li> --}}
{{-- <li class="nav-item {{ Request::is('webAccounts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('webAccounts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Web Accounts</span>
    </a>
</li> --}}
{{-- <li class="nav-item {{ Request::is('webAccountCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('webAccountCategories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Web Account Categories</span>
    </a>
</li> --}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">会社関連</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <!-- <a class="dropdown-item" href="#">Action</a> -->
      <a class="dropdown-item" href="{{ route('offices.index') }}">事業所一覧</a>
      <!-- <a class="dropdown-item" href="#">Another action</a> -->
      <a class="dropdown-item" href="{{ route('employees.index') }}">社員一覧</a>
      <!-- <a class="dropdown-item" href="#">Something else here</a> -->
      <a class="dropdown-item" href="{{ route('departments.index') }}">部署一覧</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PCアカウント関連</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <!-- <a class="dropdown-item" href="#">Action</a> -->
      <a class="dropdown-item" href="{{ route('devices.index') }}">管理機器一覧</a>
      <!-- <a class="dropdown-item" href="#">Another action</a> -->
      <a class="dropdown-item" href="{{ route('pcAccounts.index') }}">pcアカウント一覧</a>
      <!-- <a class="dropdown-item" href="#">Something else here</a> -->
      <a class="dropdown-item" href="{{ route('pcos.index') }}">使用OS一覧</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WEBアカウント関連</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <!-- <a class="dropdown-item" href="#">Action</a> -->
      <a class="dropdown-item" href="{{ route('webAccounts.index') }}">Webアカウント一覧</a>
      <!-- <a class="dropdown-item" href="#">Another action</a> -->
      <a class="dropdown-item" href="{{ route('webAccountCategories.index') }}">Webアカウントの種類一覧</a>
      <!-- <a class="dropdown-item" href="#">Something else here</a> -->
      <a class="dropdown-item" href="#">それ以外</a>
    </div>
</li>
{{-- <li class="nav-item {{ Request::is('offices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('offices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Offices</span>
    </a>
</li> --}}
{{-- <li class="nav-item {{ Request::is('devices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('devices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Devices</span>
    </a>
</li> --}}
