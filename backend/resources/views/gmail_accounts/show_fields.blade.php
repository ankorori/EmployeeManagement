<!-- Account Name Field -->
<div class="form-group">
    {!! Form::label('account_name', 'Account Name:') !!}
    <p>{{ $gmailAccount->account_name }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $gmailAccount->password }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $gmailAccount->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $gmailAccount->updated_at }}</p>
</div>

