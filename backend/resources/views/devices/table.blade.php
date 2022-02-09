<div class="table-responsive-sm">
    <table class="table table-striped" id="devices-table">
        <thead>
            <tr>
                <th>Devics Number</th>
        <th>Company</th>
        <th>Pc Name</th>
        <th>Pc Account Id</th>
        <th>Ostype</th>
        <th>Is Cd Dvd Drive</th>
        <th>Is Wired Lan</th>
        <th>Is Wireless Lan</th>
        <th>Is Internet</th>
        <th>Is Taking Out</th>
        <th>Is Lanscopecat</th>
        <th>Web Browser Id</th>
        <th>Mailer</th>
        <th>Antivirus Software</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($devices as $device)
            <tr>
                <td>{{ $device->devics_number }}</td>
            <td>{{ $device->company }}</td>
            <td>{{ $device->pc_name }}</td>
            <td>{{ $device->pc_account->account_name }}</td>
            <td>{{ $device->PCos->name }}</td>
            <td>{{ $device->is_cd_dvd_drive ? '有' : '無'}}</td>
            <td>{{ $device->is_wired_LAN ? '有' : '無' }}</td>
            <td>{{ $device->is_wireless_LAN ? '有' : '無' }}</td>
            <td>{{ $device->is_internet ? '有' : '無' }}</td>
            <td>{{ $device->is_taking_out ? '有' : '無' }}</td>
            <td>{{ $device->is_LanScopeCat ? '有' : '無' }}</td>
            <td>{{ $device->web_browser_id }}</td>
            <td>{{ $device->mailer }}</td>
            <td>{{ $device->antivirus_software }}</td>
                <td>
                    {!! Form::open(['route' => ['devices.destroy', $device->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('devices.show', [$device->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('devices.edit', [$device->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
