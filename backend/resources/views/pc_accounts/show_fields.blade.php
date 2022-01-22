<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $pcAccount->name }}</p>
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

