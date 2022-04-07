<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('使用者', '使用者:') !!}
    {!! Form::select('employee_id', App\Models\employee::selectlist(), null,['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control','maxlength' => 30]) !!}
</div>

<!-- Settingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('settingdate', 'Settingdate:') !!}
    {!! Form::text('settingdate', null, ['class' => 'form-control','id'=>'settingdate']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
            $('#settingdate').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: true,
                icons: {
                    up: "icon-arrow-up-circle icons font-2xl",
                    down: "icon-arrow-down-circle icons font-2xl"
                },
                sideBySide: true
            })
       </script>
@endpush


<!-- Account Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('account_name', 'Account Name:') !!}
    {!! Form::text('account_name', null, ['class' => 'form-control','maxlength' => 20]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pcAccounts.index') }}" class="btn btn-secondary">Cancel</a>
</div>
