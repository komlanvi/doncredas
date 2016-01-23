@extends('../index')

@section('main')
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">List of all the users</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Pseudo</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-primary">{!! $user->id !!}</td>
                            <td>{!! $user->pseudo !!}</td>
                            <td>{!! Html::linkRoute('user.show', 'Show', [$user->id], ['class' => 'btn btn-info']) !!}</td>
                            <td>{!! Html::linkRoute('user.edit', 'Edit', [$user->id], ['class' => 'btn btn-primary']) !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm("Are you sure to delete this user ?")']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! Html::linkRoute('user.create', 'Add a user', [], ['class' => 'btn btn-primary pull-right']) !!}
                {!! $links !!}
            </div>
        </div>
    </div>
@endsection