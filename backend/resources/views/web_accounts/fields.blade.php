<!-- PC Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PC_account', 'PC_Account:') !!}
    {!! Form::select('id', App\Models\pc_account::selectlist(), null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'WebAccountName:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>

<!-- Account Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Web_account_category_id', 'Account Category:') !!}
    {!! Form::select('id', App\Models\Web_account_category::selectlist(), null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('note', 'メモ:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('webAccounts.index') }}" class="btn btn-secondary">Cancel</a>
</div>
