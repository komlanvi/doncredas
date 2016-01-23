@extends('../index')

@section('content')
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">User information</h3>
            </div>
            <div class="panel-body">
                <p>Pseudo: {!! $user->pseudo !!}</p>
                <p>Email: {!! $user->email !!}</p>
                @if($user->admin == 1)
                    Admin
                @endif
                <a href="javascript:history.back()">
                    <span class="glyphicon glyphicon-arrow-left"></span>
                    Back
                </a>
            </div>
        </div>
    </div>
@endsection