<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConteudoController extends Controller
{
    public function index() {
        $materias = [
                        'Materia 1' => 'Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a adoção de políticas descentralizadoras exige a precisão e a definição das novas proposições.',
                        'Materia 2' => 'O empenho em analisar a adoção de políticas descentralizadoras facilita a criação do retorno esperado a longo prazo.',
                        'Materia 3' => 'Ainda assim, existem dúvidas a respeito de como a crescente influência da mídia obstaculiza a apreciação da importância das direções preferenciais no sentido do progresso.',
                        'Materia 4' => 'Neste sentido, a valorização de fatores subjetivos estimula a padronização das diversas correntes de pensamento.',
                        'Materia 5' => 'As experiências acumuladas demonstram que a consolidação das estruturas desafia a capacidade de equalização das condições financeiras e administrativas exigidas.',
                        'Materia 6' => 'A certificação de metodologias que nos auxiliam a lidar com a necessidade de renovação processual representa uma abertura para a melhoria das condições financeiras e administrativas exigidas.',
                        'Materia 6' => 'Desta maneira, a contínua expansão de nossa atividade maximiza as possibilidades por conta das diretrizes de desenvolvimento para o futuro.',
                        'Materia 7' => 'O que temos que ter sempre em mente é que a consolidação das estruturas estimula a padronização das diretrizes de desenvolvimento para o futuro.',
        ];

        return view('blog.index', compact('materias'));
    }
}
