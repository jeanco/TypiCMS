@section('main')

    {{ Form::model( $model, array( 'route' => array('admin.news.update', $model->id), 'method' => 'patch', 'role' => 'form' ) ) }}
        @include('news.admin._form')
    {{ Form::close() }}

@stop
