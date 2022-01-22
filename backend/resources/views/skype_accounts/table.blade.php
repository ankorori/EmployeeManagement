<div class="table-responsive-sm">
    <table class="table table-striped" id="skypeAccounts-table">
        <thead>
            <tr>
                <th>Account Name</th>
        <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($skypeAccounts as $skypeAccount)
            <tr>
                <td>{{ $skypeAccount->account_name }}</td>
            <td>{{ $skypeAccount->password }}</td>
                <td>
                    {!! Form::open(['route' => ['skypeAccounts.destroy', $skypeAccount->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('skypeAccounts.show', [$skypeAccount->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('skypeAccounts.edit', [$skypeAccount->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>