@extends('index')

@section('content')
    <form class="form" method="POST" action="{{ route('cadastrar.venda') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastrar nova venda</h1>
        </div>
        <div class="mb-3">
            <label class="form-label">Numeração</label>
            <input type="text" disabled value="{{ old('numero_da_venda') }}" class="form-control @error('numero_da_venda') is-invalid @enderror"
                name="numero_da_venda">
            @if ($errors->has('nome'))
                <div class="invalid-feedback"> {{ $errors->first('nome') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label"> Produto </label>
                <select class="form-select" name="">
                    <option selected>Clique para abrir o menu de seleção</option>
                        @foreach ($findProduto as $produto)
                            <option value=" {{ $produto->id }}">One</option>
                        @endforeach
                </select>
        </div>

        <button type="submit" class="btn btn-success">GRAVAR</button>
    </form>
@endsection