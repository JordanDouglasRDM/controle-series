<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodesController extends Controller
{
    public function index(Season $season)
    {
        return view('episodes.index', [
           'episodes' => $season->episodes,
           'mensagemSucesso' => session('mensagem.sucesso'),
        ]);
    }

    public function update(Request $request, Season $season)
    {
        $watchedEpisodes = $request->episodes;
        DB::beginTransaction();
        //each = faça para cada um dos episodeos que estao na minha season
        $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
            $episode->watched = in_array($episode->id, $watchedEpisodes);
        });
        $season->push();//salvar a model e todos os seus relacionamentos
        DB::commit();
        return to_route('episodes.index', $season->id)
            ->with('mensagem.sucesso', "Os episódios assistidos foram atualizados");
    }
}
