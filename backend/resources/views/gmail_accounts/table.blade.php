<div class="table-responsive-sm">
    <table class="table table-striped" id="gmailAccounts-table">
        <thead>
            <tr>
                <th>Account Name</th>
        <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gmailAccounts as $gmailAccount)
            <tr>
                <td>{{ $gmailAccount->account_name }}</td>
            <td>{{ $gmailAccount->password }}</td>
                <td>
                    {!! Form::open(['route' => ['gmailAccounts.destroy', $gmailAccount->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gmailAccounts.show', [$gmailAccount->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('gmailAccounts.edit', [$gmailAccount->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>