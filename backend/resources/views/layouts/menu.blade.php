

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
