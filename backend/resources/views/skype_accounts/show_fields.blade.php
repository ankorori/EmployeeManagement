<!-- Account Name Field -->
<div class="form-group">
    {!! Form::label('account_name', 'Account Name:') !!}
    <p>{{ $skypeAccount->account_name }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $skypeAccount->password }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $skypeAccount->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $skypeAccount->updated_at }}</p>
</div>

