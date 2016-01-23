@extends('../index')

@section('main')
    <br>
    <div class="col-lg-offset-2 col-lg-8">
        <div class="panel panel-info">
            <div class="panel-heading">Contactez-moi</div>
            <div class="panel-body">
                Merci. Votre message a été transmis à l'administrateur du site. Vous recevrez une réponse rapidement.
                <hr>
                <p>Nom: {{ $nom }}</p>
                <p>Email: {{ $email }}</p>
                <p>Message: {{ $message }}</p>
            </div>
        </div>
    </div>
@stop