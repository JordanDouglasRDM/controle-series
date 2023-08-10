<form action="{{ $action }}" method="post">
    @csrf
    @isset($update)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control"
               autocomplete="off" autofocus
                @isset($nome)value="{{ $nome }}"@endisset>
    </div>
    <button type="submit" class="btn btn-primary mb-2">{{ $submit }}</button>
</form>
<a href="{{ route('series.index') }}" class="btn btn-secondary mb-2">Listar cadastradas</a>
