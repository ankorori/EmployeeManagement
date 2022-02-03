@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('pcAccounts.index') !!}">Pc Account</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create Pc Account</strong>
                            </div>
                            <div class="card-body">
                                ※使用者名のドロップダウンに登録したい人の名前が無い場合は<a href="{!! route('employees.create') !!}">こちら</a>から登録お願いします。<br>
                                {!! Form::open(['route' => 'pcAccounts.store']) !!}

                                   @include('pc_accounts.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
