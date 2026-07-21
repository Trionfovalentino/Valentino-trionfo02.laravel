<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles = [
        1 => [
            'id' => 1,
            'title' => 'Come Scegliere la Scheda Madre per PC Gaming',
            'category' => 'Hardware',
            'summary' => 'Guida completa ai socket, chipsets e fattori di forma per la tua configurazione.',
            'content' => 'La scelta della scheda madre è fondamentale per garantire stabilità e compatibilità al tuo PC...'
        ],
        2 => [
            'id' => 2,
            'title' => 'I Migliori Setting di Performance per i Videogiochi FPS',
            'category' => 'Gaming',
            'summary' => 'Ottimizza la latenza di input e massimizza i fotogrammi al secondo.',
            'content' => 'Nei giochi competitivi ogni millisecondo conta. Ecco quali impostazioni grafiche disattivare...'
        ],
        3 => [
            'id' => 3,
            'title' => 'I Principi Base della Cybersecurity per Sviluppatori',
            'category' => 'Sicurezza',
            'summary' => 'Proteggi le tue applicazioni web dai principali attacchi informatici.',
            'content' => 'Implementare pratiche di sviluppo sicuro evita vulnerabilità critiche nelle tue app...'
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
        if (!array_key_exists($id, $this->articles)) {
            abort(404);
        }

        $article = $this->articles[$id];
        return view('articles.show', ['article' => $article]);
    }
}