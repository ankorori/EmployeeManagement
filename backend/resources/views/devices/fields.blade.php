※PCアカウントのドロップダウンに登録したい人の名前が無い場合は<a href="{!! route('pcAccounts.create') !!}">こちら</a>から登録お願いします。<br>

<!-- Devics Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('devics_number', 'Devics Number:') !!}
    {!! Form::text('devics_number', null, ['class' => 'form-control','maxlength' => 20]) !!}
</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control','maxlength' => 20]) !!}
</div>

<!-- Pc Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pc_name', 'Pc Name:') !!}
    {!! Form::text('pc_name', null, ['class' => 'form-control','maxlength' => 20]) !!}
</div>

<!-- Pc Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pc_account_id', 'Pc Account Id:') !!}
    {!! Form::select('pc_account_id', App\Models\pc_account::selectlist(), null, ['class' => 'form-control']) !!}
</div>

<!-- Ostype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ostype_id', 'Ostype:') !!}
    {!! Form::select('ostype_id', App\Models\PCos::selectlist(), null, ['class' => 'form-control']) !!}
</div>

<!-- Is Cd Dvd Drive Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_cd_dvd_drive', 'Is Cd Dvd Drive:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_cd_dvd_drive', 0) !!}
        {!! Form::checkbox('is_cd_dvd_drive', '1', null) !!}
    </label>
</div>


<!-- Is Wired Lan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_wired_LAN', 'Is Wired Lan:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_wired_LAN', 0) !!}
        {!! Form::checkbox('is_wired_LAN', '1', null) !!}
    </label>
</div>


<!-- Is Wireless Lan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_wireless_LAN', 'Is Wireless Lan:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_wireless_LAN', 0) !!}
        {!! Form::checkbox('is_wireless_LAN', '1', null) !!}
    </label>
</div>


<!-- Is Internet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_internet', 'Is Internet:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_internet', 0) !!}
        {!! Form::checkbox('is_internet', '1', null) !!}
    </label>
</div>


<!-- Is Taking Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_taking_out', 'Is Taking Out:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_taking_out', 0) !!}
        {!! Form::checkbox('is_taking_out', '1', null) !!}
    </label>
</div>


<!-- Is Lanscopecat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_LanScopeCat', 'Is Lanscopecat:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_LanScopeCat', 0) !!}
        {!! Form::checkbox('is_LanScopeCat', '1', null) !!}
    </label>
</div>


<!-- Web Browser Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('web_browser_id', 'Web Browser Id:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('web_browser_id', 0) !!}
        {!! Form::checkbox('web_browser_id', '1', null) !!}
    </label>
</div>


<!-- Mailer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mailer', 'Mailer:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('mailer', 0) !!}
        {!! Form::checkbox('mailer', '1', null) !!}
    </label>
</div>


<!-- Antivirus Software Field -->
<div class="form-group col-sm-6">
    {!! Form::label('antivirus_software', 'Antivirus Software:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('antivirus_software', 0) !!}
        {!! Form::checkbox('antivirus_software', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('devices.index') }}" class="btn btn-secondary">Cancel</a>
</div>
