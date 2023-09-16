@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Detalhes do Email</h5>
        </div>
        <div class="card-body">
            <p><strong>Assunto:</strong> {{ $assunto }}</p>
            <p><strong>Mensagem:</strong> {{ $mensagem }}</p>
        </div>
    </div>
@endsection
