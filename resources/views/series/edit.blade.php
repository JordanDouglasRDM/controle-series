<x-layout title="Editar série '{!! $serie->nome !!}'">
    <form action="{{ route('series.update', $serie->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control"
                   autocomplete="off" autofocus
                   value="{{ $serie->nome }}">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Atualizar</button>
    </form>
</x-layout>
