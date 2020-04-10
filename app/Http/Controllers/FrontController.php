<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// L'import du namespace
use App\Book;
use App\Author;
use App\Genre;

class FrontController extends Controller
{

    private $paginate = 5;
    private $paginateAuthor = 2;

=======
    public function __construct(){
        view()->composer('partials.menu', function($view){
            $genres = Genre::pluck('name', 'id');
            $view->with('genres', $genres);
        });
>>>>>>> f11a007979ccebbd9d4e1331c7086f348a9bb280

    }

    public function index(){
        $books = Book::paginate($this->paginate);

        // Le premier paramètre c'est le nom de votre vue
        // le point désigne le fait que vous allez chercher un fichier se trouvant dans un dossier
        return view('front.index', ['books' => $books]);
    }

    // int permet de vérifier le type du paramètre de ma fonction
    // le paramètre $id est récupéré dans la route
    public function show(int $id){
        $book = Book::find($id);

        return view('front.show', ['book' => $book]);
    }

    // récupérer tous les livres d'un auteur
    public function showAuthor(int $id){
        // relation ManyToMany pour récupérer tous les livres d'un auteur
        // avec de la pagination 
        // $books = Author::find($id)->books // on récupère tous les livres d'un auteur

        // on récupère tous les livres d'un auteur avec la pagination
        $books = Author::find($id)->books()->paginate( $this->paginateAuthor );

        return view('front.author', ['books' => $books]);
    }

    public function showGenre(int $id){

        $genre = Genre::find($id);

        $books = $genre->books()->paginate($this->paginate);

        return view('front.genre', [
            'books' => $books,
            'name' => $genre->name
            ]);
    }
}
