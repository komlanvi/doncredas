@extends("../../index")

@section("main")
    <div class="col-lg-8 col-lg-offset-2">
        @if(session()->has("error"))
            <div class="alert alert-danger">{{ session("error") }}</div>
        @endif
        <div class="panel panel-info">
            <div class="panel-heading">
                Envoi d'une photo
            </div>
            <div class="panel-body">
                {!! Form::open(["url" => "image", "files" => true]) !!}
                <div class="form-group">
                    {!! Form::file("image", ["class" => "form-control"]) !!}
                    {!! $errors->first("image", "<small class=\"help-block\">:message</small>") !!}
                </div>
                <div class="form-group">
                    {!! Form::submit("Envoyer", ["class" => "btn btn-info pull-right"]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection