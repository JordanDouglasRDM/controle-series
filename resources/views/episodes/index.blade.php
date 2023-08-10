<x-layout title="Episódios" :mensagem-sucesso="$mensagemSucesso">
    <a href="{{ route('seasons.index') }}">
        Voltar
    </a><br>
    <form method="post">
        @csrf
        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
        <ul class="list-group">

            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio {{$episode->number}}

                    <input type="checkbox"
                           name="episodes[]"
                           value="{{ $episode->id }}"
                            @if($episode->watched) checked @endif>
                </li>
            @endforeach
        </ul>
    </form>

</x-layout>
