<li class="nav-item {{ Request::is('departments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('departments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>所属</span>
    </a>
</li>
<li class="nav-item {{ Request::is('employees*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('employees.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>社員リスト</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pCos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pCos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>PC_OS</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pcAccounts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pcAccounts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pc Accounts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('webAccounts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('webAccounts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Web Accounts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('webAccountCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('webAccountCategories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Web Account Categories</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ドロップダウン</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <!-- <a class="dropdown-item" href="#">Action</a> -->
      <a class="dropdown-item" href="#">アクション</a>
      <!-- <a class="dropdown-item" href="#">Another action</a> -->
      <a class="dropdown-item" href="#">他のアクション</a>
      <!-- <a class="dropdown-item" href="#">Something else here</a> -->
      <a class="dropdown-item" href="#">それ以外</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ドロップダウン</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <!-- <a class="dropdown-item" href="#">Action</a> -->
      <a class="dropdown-item" href="#">アクション</a>
      <!-- <a class="dropdown-item" href="#">Another action</a> -->
      <a class="dropdown-item" href="#">他のアクション</a>
      <!-- <a class="dropdown-item" href="#">Something else here</a> -->
      <a class="dropdown-item" href="#">それ以外</a>
    </div>
</li>
<li class="nav-item {{ Request::is('offices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('offices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Offices</span>
    </a>
</li>
<li class="nav-item {{ Request::is('devices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('devices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Devices</span>
    </a>
</li>
