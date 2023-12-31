<div class="col-md-10 offset-md-1 col-12 mt-4">
    <div class="card card-outline card-dark">
        <div class="card-header">
            <h3 class="card-title title-form">{{ $title ?? null }} </h3>
        </div>
        <div class="card-body">
            <form id="form-adicionar" action="{{ $url ?? '/' }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                {{ $form ?? null }}
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" form="form-adicionar" class="btn btn-dark float-right">Salvar Alterações</button>
            {{ $voltar ?? null }}
        </div>
    </div>
</div>