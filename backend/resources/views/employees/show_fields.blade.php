<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <br>
    <strong>{{ $employee->name }}</strong>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', '所属部署:') !!}<br>
    <strong>{{ $employee->department->name }}</strong>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', '作成日:') !!}<br>
    <strong>{{ $employee->created_at }}</storng>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', '更新日:') !!}<br>
    <strong>{{ $employee->updated_at }}</strong>
</div>

