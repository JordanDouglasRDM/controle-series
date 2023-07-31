<x-layout title="Editar série '{{ $serie->nome }}'">
    <x-series.form action="{{ route('series.update', $serie->id) }}" submit="Atualizar" nome="{{ $serie->nome }}"/>
</x-layout>
