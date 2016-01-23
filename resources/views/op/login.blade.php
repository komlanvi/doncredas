@extends("../index")

@section("main")
    {!! Form::open(["url" => "user"]) !!}
    <div>
        {!! Form::label("nom", "Entrer votre nom") !!}
        {!! Form::text("nom") !!}
        {!! Form::label("email", "Entrer votre email") !!}
        {!! Form::email("email", "", ["placeholder" => "ex: ab@cd.ef", "class" => "form-control"]) !!}
        {!! Form::submit("Envoyer") !!}
    </div>
    {!! Form::close() !!}
@endsection