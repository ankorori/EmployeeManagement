<!-- Departmentname Field -->
<div class="form-group">
    {!! Form::label('departmentName', 'Departmentname:') !!}
    <p>{{ $departments->departmentName }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $departments->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $departments->updated_at }}</p>
</div>

