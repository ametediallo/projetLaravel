<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// Premiere Méthode
// Route::get('/', function () {
//     $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
//     return view('base')->with("jours", $jours);
// });

// Route::get('/about', function () {
//     return view('pages/about')
//     ->with("prenom", "Modou")
//     ->with('nom', "Sarr");
// });


// Deuxieme Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom("Gnoror")
//     ->withNom("Sarr");
// });


// Troisime Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom' => "Modou",
//         'nom' => "Sarr"
//     ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });

Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/service', 'pages/service');


Route::get('/', function () {
    // 🌴🌴🌴 Apprendre SQL Brute 🌴🌴🌴
    // Séléctionner la liste des articles
    // $articles = DB::select('select * from articles');

    // Séléctionner le premier article
    // $article = DB::select('select * from articles')[0];
    // dd($article);

    // Séléctionner le premier article
    // $article = DB::select('select * from articles limit 1');
    // dd($article);

    // A partir du 2em article, recuperer 1 articles
    // $article = DB::select('select * from articles limit 1 offset 2');
    // dd($article);

    // Inserer un article : 1ere methode
    // $ok = DB::insert("INSERT INTO articles
    // values(null, :titre, :contenu, :etat,  :date)", [
    //     'titre' => 'Titre4',
    //     'contenu' => 'Contenu4',
    //     'etat' => 1,
    //     'date' => date('Y-m-d H:i:s')
    // ]);
    // dd($ok);

    // Inserer un article : 2eme methode
    // $titre = 'Titre 5';
    // $contenu = 'Contenu 5';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles
    // values(null, :titre, :contenu, :etat,  :date)",
    // compact('titre', 'contenu', 'etat', 'date'));
    // dd($ok);

     // Inserer un article : 3eme methode
    // $titre = 'Titre 6';
    // $contenu = 'Contenu 6';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles values(
    //     null, ?, ?, ?, ?)",
    //     [$titre, $contenu, $etat, $date]
    // );
    // dd($ok);


    // Modifier le titre du deuxieme article
    // $ok = DB::update("UPDATE articles SET titre='Titre 2 modifié' WHERE id =2");
    // dd($ok);

    // Supprimer l'article dont l'id =6
    // $ok = DB::delete("DELETE from articles WHERE id =6");
    // dd($ok);


    // 🌴🌴🌴 Apprendre Fluent Query Builder 🌴🌴🌴
    // Selectionner tous les articles
    // $articles = DB::table('articles')->get('*');
    // $articles = DB::table('articles')->get();
    // dd($articles);

     // Selectionner tous les article (uniquement les colonnes id et titre)
    // $articles = DB::table('articles')->get(['contenu', 'titre']);
    // dd($articles);

    // Selectionner le premier article
    // $article = DB::table('articles')->first();
    // dd($article);

    // Selectionner le premier article
    // $article = DB::table('articles')->first();
    // dd($article);

    // Selectionner le titre du premier article
    // $article = DB::table('articles')->first()->contenu;
    // dd($article);

    // Selectionner le titre du premier article
    // $article = DB::table('articles')->first();
    // dd($article->contenu);

    // Selectionner l'article qui a pour titre "Titre 2"
    // $article = DB::table('articles')->whereId(2)->get();
    // $article = DB::table('articles')->where('id', 2)->get();
    // dd($article);


    // Selectionner tous les articles dont leur id est >= 2
    // $article = DB::table('articles')->where('id', '>', 1)->get();
    // dd($article);

    // Selectionner l'article dont le titre est "Titre 2" et
    // le contenu  "Contenu 2" (Premiere méthode)
    // $article = DB::table('articles')
    //         ->whereTitreAndContenu('Titre 2', 'Contenu 2')
    //         ->get();
    // dd($article);


    // // Selectionner l'article dont le titre est "Titre 2" et
    // // le contenu  "Contenu 2" (Deuxieme méthode)
    // $article = DB::table('articles')
    //         ->where('titre', 'Titre2')
    //         ->where('contenu', 'Contenu 2')
    //         ->get();
    // dd($article);

    // return view('base');

    // // Selectionner deux articles
    // $article = DB::table('articles')->take(2) ->get();
    // dd($article);

    // return view('base');

    //  // // Apatir du deuxime articles, Selectionner 3 articles
    // $article = DB::table('articles')
    // ->where('id', '>', '2')
    // ->take(3)
    // ->get();
    // dd($article);

    // return view('base');

    //  //  // // Selectionner tous les articles en faisant ue trie ascendent
    // $articles1 = DB::table('articles')->orderBy('titre', 'asc')->get();
    // $articles2 = DB::table('articles')->orderBy('titre', 'asc')->get();
    // dump($articles1);
    // dd($articles2);

    // return view('base');

    //  //  // // Selectionner tous les article dont leur id >2
    // $article = DB::table('articles')->where('id', '>', '2')->orderBy('titre', 'asc')->get();
    // dd($article);

    //return  view('base');

    // // Afficher le nombre d'article
    // $articles = DB::table('articles')->count();
    // dd($articles);


    // Inserer un article (Preliere Méthode)
    // // $articles = DB::table('articles')->count();
    // $ok = $articles = DB::table('articles')->insert(
    //     [
    //         'titre' => 'Titre 6',
    //         'contenu' => 'Contenu 6',
    //         'etat' => 0,
    //         'date' => date('Y-m-d H:i:s'),
    //     ],
    //     [
    //         'titre' => 'Titre 7',
    //         'contenu' => 'Contenu 7',
    //         'etat' => 1,
    //         'date' => date('Y-m-d H:i:s'),
    //     ]
    // );
    // dd($ok);

    // return  view('base');

     // Inserer 2 article (Preliere Méthode)
    // $ok = $articles = DB::table('articles')->insert(
    //     [
    //         'titre' => 'Titre 8',
    //         'contenu' => 'Contenu 8',
    //         'etat' => 0,
    //         'date' => date('Y-m-d H:i:s'),
    //     ],
    //     [
    //         'titre' => 'Titre 9',
    //         'contenu' => 'Contenu 9',
    //         'etat' => 1,
    //         'date' => date('Y-m-d H:i:s'),
    //     ]
    // );
    // dd($ok);

    // return  view('base');

    // $ok = DB::table('articles')->whereId(2)->update(
    //     [
    //     'titre' => 'BTitre modifié',
    //     'contenu' => 'Contenu 8 modifié',
    //     ]
    // );
    // dd($ok);
     // Supprimer l'article d'id 4
    $ok = DB::table('articles')->where('id', 4)->delete();
        dd($ok);

     // Apprendre Eloquent (ORM)
     $etudiants = Etudiant::get();
     dd($etudiant);
        return  view('base');
});
