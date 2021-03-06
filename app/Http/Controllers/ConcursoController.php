<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateConcurso;
use App\Models\Concurso;
use App\Models\Jogo;
use App\Models\Resultado;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;
use Symfony\Component\Console\Input\Input;

class ConcursoController extends Controller
{
    private $repositoryConcurso;

    public function __construct(Concurso $concurso)
    {
        $this->repositoryConcurso = $concurso;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concursos = $this->repositoryConcurso->all();

        return view('pages.numerossorteados.index', compact('concursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.numerossorteados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateConcurso $request)
    {

        $concursos = new Concurso();

        $concursos->identificador_concurso = request('identificador_concurso');
        $concursos->numerosorteado = request('numerosorteado');
        $concursos->save();
        //$concursos = conc$concursos::create($request->all());
        //dd($concursos);

        return redirect()
                    ->route('concurso.index')
                    ->with('message', 'Cartão atualizado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // $concurso = Concursos::where('id', $id)->first();

        $concurso = Concurso::find($id);

        $jogos = $concurso->jogos()->get()->all();

        // return redirect()->route('cartoes.show', compact('cartao'));

        return view('pages.numerossorteados.show', compact('concurso'), compact('jogos'));
    }

    public function acertos(Request $request, $id)
    {
        // $concurso = Concursos::where('id', $id)->first();

        $concurso = Concurso::find($id);

        $jogos = $concurso->jogos()->get()->all();

        // return redirect()->route('cartoes.show', compact('cartao'));

        return view('pages.numerossorteados.acertos', compact('concurso'), compact('jogos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if(!$concurso = $this->repository->find($id))
        //    return redirect()->back();
        $concurso = Concurso::findOrFail($id);
        if(!$concurso = Concurso::find($id)){
            return redirect()->route('concurso.index');
        }

        return view('pages.numerossorteados.edit', compact('concurso'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //if (!$sorteado = $this->repository->find($id))
        //   return redirect()->back();

        $this->validate($request, array(
            'identificador_concurso' => "required|min:1|max:10|unique:concursos,identificador_concurso,$id",
        ));

        if(!$concurso = Concurso::find($id)){
            return redirect()->back();
        }
        $concurso = new Concurso();
        $concurso = Concurso::findOrFail($id);
        $concurso->identificador_concurso = request('identificador_concurso');
        $concurso->numerosorteado = request('numerosorteado');

        $concurso->update($request->all());


        return redirect()
                ->route('concurso.index')
                ->with('message', 'Cartão Sorteado atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concurso = Concurso::find($id);

        $concurso->delete();

        return redirect()
            ->route('concurso.index')
            ->with('message', 'Cartão deletado com sucesso');
    }

    public function search(Request $request){

        $concursos = Concurso::where('identificador_concurso', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('pages.numerossorteados.index', compact('concursos'));
    }
}
