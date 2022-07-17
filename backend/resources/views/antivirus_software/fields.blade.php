<!-- ?Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ãname', '?Name:') !!}
    {!! Form::text('ãname', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('antivirusSoftware.index') }}" class="btn btn-secondary">Cancel</a>
</div>
