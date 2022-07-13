<table class="table table-striped">
  <tr><th>基本情報</th></tr>
  <tr><td>{!! Form::label('name', 'Name:') !!}</td><td>{{ $pcAccount->employee->name }}</td></tr>
  <tr><td>{!! Form::label('password', 'Password:') !!}</td><td>{{ $pcAccount->password }}</td></tr>
  <tr><td>{!! Form::label('settingdate', 'Settingdate:') !!}</td><td>{{ $pcAccount->settingdate }}</td></tr>
  <tr><td>{!! Form::label('account_name', 'Account Name:') !!}</td><td>{{ $pcAccount->account_name }}</td></tr>
  <tr><td>{!! Form::label('created_at', 'Created At:') !!}</td><td>{{ $pcAccount->created_at }}</td></tr>
  <tr><td>{!! Form::label('updated_at', 'Updated At:') !!}</td><td>{{ $pcAccount->updated_at }}</td></tr>
    @foreach ($pcAccount->Web_accounts as $web_account)
        @if ($web_account)
            <tr><td>{!! Form::label('account_name', 'Account Name:') !!}</td><td><a href="{{ route('webAccounts.edit', [$web_account->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i>{{ $web_account->web_account_category->name }}</a></td></tr>
        @else
            <strong>登録無し</strong>
        @endif
    @endforeach
</table>
</div>
