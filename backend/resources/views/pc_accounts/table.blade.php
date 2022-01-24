<div class="table-responsive-sm">
    <table class="table table-striped" id="pcAccounts-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Account Name</th>
                <th>Password</th>
                <th>Settingdate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pcAccounts as $pcAccount)
            <tr>
                <td><a href="{{ route('employees.edit', [$pcAccount->employee->id]) }}">{{ $pcAccount->employee->name }}</a></td>
                <td><a href="{{ route('pcAccounts.show', [$pcAccount->id]) }}">{{ $pcAccount->account_name }}</a></td>
                <td>{{ $pcAccount->password }}</td>
                <td>{{ $pcAccount->settingdate }}</td>
                <td>
                    {!! Form::open(['route' => ['pcAccounts.destroy', $pcAccount->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pcAccounts.show', [$pcAccount->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('pcAccounts.edit', [$pcAccount->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
