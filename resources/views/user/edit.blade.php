@extends('../index')

@section('main')
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Edit user</h3>
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['method' => 'PUT', 'route' => ['user.update', $user->id], 'class' => 'form-horizontal']) !!}
                    <div class="form-group {!! $errors->has('pseudo') ? 'has-error' : '' !!}">
                        {!! Form::text('pseudo', null, ['class' => 'form-control', 'placeholder' => 'Pseudo']) !!}
                        {!! $errors->first('pseudo', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('admin', 1, null) !!}Administrateur
                            </label>
                        </div>
                    </div>
                        {!! Form::submit('Update', ['class' => 'btn btn-lg btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Back
        </a>
    </div>
@endsection