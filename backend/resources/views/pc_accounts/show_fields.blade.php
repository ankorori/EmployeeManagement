<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $pcAccount->employee->name }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $pcAccount->password }}</p>
</div>

<!-- Settingdate Field -->
<div class="form-group">
    {!! Form::label('settingdate', 'Settingdate:') !!}
    <p>{{ $pcAccount->settingdate }}</p>
</div>

<!-- Account Name Field -->
<div class="form-group">
    {!! Form::label('account_name', 'Account Name:') !!}
    <p>{{ $pcAccount->account_name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pcAccount->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pcAccount->updated_at }}</p>
</div>

<div class="form-group">
    {!! Form::label('Web_accounts', 'Web-accounts:') !!}
    @foreach ($pcAccount->Web_accounts as $web_account)
    <br>
    <strong><a href="{{ route('webAccounts.edit', [$web_account->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i>{{ $web_account->web_account_category->name }}</a></strong>
    @endforeach
</div>
