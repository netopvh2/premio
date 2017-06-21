<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view('home', compact('registros'));
    }

    public function export()
    {
        $data = $this->dataExport();

        Excel::create('inscritos', function ($excel) use ($data) {
            $excel->setTitle('Inscritos Premio Fiero de Jornalismo');
            $excel->sheet('Inscritos', function ($sheet) use ($data) {
                $sheet->with($data);
            });

        })->export('xlsx');
    }

    private function dataExport()
    {

        $registros = Registro::join('estados', 'FIEJORNALISMO.ESTADO', '=', 'estados.CODIGO')
            ->join('cidades', 'FIEJORNALISMO.MUNICIPIO', '=', 'cidades.CODIGO')
            ->select(
                'FIEJORNALISMO.NOME',
                'FIEJORNALISMO.CPF',
                'FIEJORNALISMO.ENDERECO',
                'FIEJORNALISMO.NUMERO',
                'FIEJORNALISMO.BAIRRO',
                'FIEJORNALISMO.COMPLEMENTO',
                'FIEJORNALISMO.CEP',
                'estados.SIGLA AS ESTADO',
                'cidades.CIDADE',
                'FIEJORNALISMO.TELEFONE AS CELULAR',
                'FIEJORNALISMO.TELEFONEFIXO AS FIXO',
                'FIEJORNALISMO.EMAIL',
                'FIEJORNALISMO.EMPRESA',
                'FIEJORNALISMO.EMPENDERECO AS ENDERECO_EMPRESA',
                'FIEJORNALISMO.EMPNUMERO AS NUMERO_EMPRESA',
                'FIEJORNALISMO.EMPBAIRRO AS BAIRRO_EMPRESA',
                'FIEJORNALISMO.EMPCOMPLEMENTO AS COMPLEMENTO_EMPRESA',
                'FIEJORNALISMO.EMPCEP AS NUMERO_EMPRESA',
                'estados.SIGLA AS ESTADO_EMPRESA',
                'cidades.CIDADE AS CIDADE_EMPRESA',
                'FIEJORNALISMO.EMPTELEFONE AS CEULAR_EMPRESA',
                'FIEJORNALISMO.EMPTELEFONEFIXO AS FIXO_EMPRESA',
                'FIEJORNALISMO.EMPEMAIL AS EMAIL_EMPRESA',
                'FIEJORNALISMO.REGISTROPROF AS REGRISTRO_PROFISSIONAL',
                DB::raw('UPPER(FIEJORNALISMO.TITULOTRAB) AS TITULO'),
                DB::raw('UPPER(FIEJORNALISMO.MODALIDADE) AS MODALIDADE'),
                'FIEJORNALISMO.EDITOR'
            )
            ->get();

        $registroArray = [];

        foreach ($registros as $registro){
            $registroArray[] = $registro->toArray();
        }

        return $registroArray;
    }
}
