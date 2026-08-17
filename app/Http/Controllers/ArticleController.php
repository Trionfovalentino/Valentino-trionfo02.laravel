<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles = [
        [
            'id' => 1,
            'title' => 'Introduzione a Laravel',
            'category' => 'Programmazione',
            'description' => 'Guida base ai concetti principali del framework Laravel.',
            'content' => 'In questa lezione vediamo come utilizzare i controller e integrare Bootstrap utilizzando Laravel Vite e i componenti Blade anonimi.'
        ],
        [
            'id' => 2,
            'title' => 'Lavorare con i Componenti Blade',
            'category' => 'Frontend',
            'description' => 'Come creare layout puliti ed efficienti con i componenti anonimi.',
            'content' => 'I componenti anonimi ci permettono di riutilizzare codice HTML come layout, navbar e footer riducendo la duplicazione.'
        ],
        [
            'id' => 3,
            'title' => 'Gestione delle Rotte e dei Controller',
            'category' => 'Backend',
            'description' => 'Separare la logica di business dalle rotte per un codice ordinato.',
            'content' => 'Organizzare l\'applicazione attraverso i controller garantisce una struttura scalabile e manutenibile nel tempo.'
        ]
    ];

    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('articles.index', ['articles' => $this->articles]);
    }

    public function show($id)
    {
        foreach ($this->articles as $article) {
            if ($article['id'] == $id) {
                return view('articles.show', ['article' => $article]);
            }
        }

        abort(404);
    }
}