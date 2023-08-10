<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="row mb-3" >
            <div class="col mb-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control"
                       autocomplete="off" autofocus
                       value="{{ old('nome') }}">
            </div>
            <div class="col mb-2">
                <label for="seasonsQty" class="form-label">N° Temporadas:</label>
                <input type="text" id="seasonsQty" name="seasonsQty" class="form-control"
                       autocomplete="off" autofocus
                       value="{{ old('seasonsQty') }}">
            </div>
            <div class="col mb-2">
                <label for="episodesPerSeason" class="form-label">Eps / Temporadas:</label>
                <input type="text" id="episodesPerSeason" name="episodesPerSeason" class="form-control"
                       autocomplete="off" autofocus
                       value="{{ old('episodesPerSeason') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Adicionar</button>
    </form>
    <a href="{{ route('series.index') }}" class="btn btn-secondary mb-2">Listar cadastradas</a>
</x-layout>
