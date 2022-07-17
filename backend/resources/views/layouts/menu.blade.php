<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">会社関連</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <a class="dropdown-item" href="{{ route('offices.index') }}">事業所一覧</a>
      <a class="dropdown-item" href="{{ route('employees.index') }}">社員一覧</a>
      <a class="dropdown-item" href="{{ route('departments.index') }}">部署一覧</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PCアカウント関連</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <a class="dropdown-item" href="{{ route('devices.index') }}">管理機器一覧</a>
      <a class="dropdown-item" href="{{ route('pcAccounts.index') }}">pcアカウント一覧</a>
      <a class="dropdown-item" href="{{ route('pcos.index') }}">使用OS一覧</a>
      <a class="dropdown-item" href="{{ route('webBrowsers.index') }}">使用webブラウザ一覧</a>
      <a class="nav-link" href="{{ route('mailers.index') }}">使用mailer一覧</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WEBアカウント関連</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
      <a class="dropdown-item" href="{{ route('webAccounts.index') }}">Webアカウント一覧</a>
      <a class="dropdown-item" href="{{ route('webAccountCategories.index') }}">Webアカウントの種類一覧</a>
    </div>
</li>
