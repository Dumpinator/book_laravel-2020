<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// L'import du namespace
use App\Book;

class FrontController extends Controller
{

    private $paginate = 5;

    public function index(){

        $books = Book::paginate($this->paginate);

        // Le premier paramètre c'est le nom de votre vue
        // le point désigne le fait que vous allez chercher un fichier se trouvant dans un dossier
        return view('front.index', ['books' => $books]);
    }

    // int permet de vérifier le type du paramètre de ma fonction
    // le paramètre $id est récupéré dans la route
    public function show(int $id){

        return Book::find($id);
    }
}
