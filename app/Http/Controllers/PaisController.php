<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    protected $cidades = [
        ['id' => 1, 'nome' => 'São Paulo', 'estado' => 'São Paulo', 'populacao' => 12300000, 'area' => 1521, 'pais' => 'Brasil'],
        ['id' => 2, 'nome' => 'Rio de Janeiro', 'estado' => 'Rio de Janeiro', 'populacao' => 6748000, 'area' => 1182, 'pais' => 'Brasil'],
        ['id' => 3, 'nome' => 'Belo Horizonte', 'estado' => 'Minas Gerais', 'populacao' => 2523000, 'area' => 331, 'pais' => 'Brasil'],
        // Adicione mais cidades conforme necessário
    ];

    public function index(){
        $paises = [
            ['nome' => 'Brasil', 'capital' => 'Brasilia'],
            ['nome' => 'Argentina', 'capital' => 'Buenos Aires'],
            ['nome' => 'Chile', 'capital' => 'Santiago'],
        ];
        return view('paises.index', ['paises' => $paises, 'cidades' => $this->cidades]);
    }

    public function show($nome){
        $p = [
            'nome' => $nome,
            'capital' => 'Desconhecida',
        ];

        switch($nome){
            case 'Brasil':
                $p['capital'] = 'Brasilia';
                break;
            case 'Argentina':
                $p['capital'] = 'Buenos Aires';
                break;
            case 'Chile':
                $p['capital'] = 'Santiago';
                break;
            default:
                $p['capital'] = 'Desconhecida';
        }
        return view('paises.show', compact('p'));
    }

    public function cidade($id){
        $cidade = collect($this->cidades)->firstWhere('id', $id);
        return view('paises.cidade', ['cidade' => $cidade]);
    }
}
