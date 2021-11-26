<?php

namespace App\Http\Controllers;
use App\Models\documents;
use App\Models\tipoDocument;
use Illuminate\Http\Request;
use app\Http\Requests\docsCad;

class docsController extends Controller
{     
    private $objDocument;
    private $objTipo;

    public function __construct()
    {
        $this -> objDocument = new documents();
        $this -> objTipo = new tipoDocument();
        

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $docs=documents::paginate(10);
        return view('consulta', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos= $this->objTipo->all();
        return view('cadastro',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cad=  $this->objDocument->create([
            'titulo' =>$request->titulo,
            'nome_arquivo' =>$request->nome,
            'tipo_id' =>$request->tipo,
        ]);

        if($cad){
            return redirect('/docs');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc= $this->objDocument->find($id);
        $tipos=$this->objTipo->all();
        return view('editar',compact('doc','tipos'));
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
        $upd=$doc= $this->objDocument->where(['id'=>$id])->update([
            'titulo' =>$request->titulo,
            'nome_arquivo' =>$request->nome,
            'tipo_id' =>$request->tipo,

        ]);
        if($upd){
            return redirect('/docs');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objDocument-> where(['id'=>$id])->delete();

        if($del){
            return redirect('/docs');
        }
    }
}
