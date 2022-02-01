<div class="table-responsive-sm">
    <table class="table table-striped" id="webAccounts-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Password</th>
                <th>Note</th>
                <th>Account Category Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($webAccounts as $webAccount)
            <tr>
                <td>{{ $webAccount->name }}</td>
                <td>{{ $webAccount->password }}</td>
                <td>{{ $webAccount->note }}</td>
                <td>{{ $webAccount->web_account_category->name }}</td>
                <td>
                    {!! Form::open(['route' => ['webAccounts.destroy', $webAccount->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('webAccounts.show', [$webAccount->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('webAccounts.edit', [$webAccount->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
