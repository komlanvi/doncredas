@extends('../index')

@section('main')
    <div class="col-sm-offset-1 col-sm-10">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Create a user</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['url' => 'user', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('pseudo') ? 'has-error' : '' !!}">
                        {!! Form::text('pseudo', null, ['class' => 'form-control', 'placeholder' => 'Pseudo']) !!}
                        {!! $errors->first('pseudo', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
                        {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('admin', 1, null) !!} Administrateur
                            </label>
                        </div>
                    </div>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Back
        </a>
    </div>
@endsection