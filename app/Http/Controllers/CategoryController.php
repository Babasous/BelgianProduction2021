<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index(){
        //Récupérer les données
        $categories = Category::all();

        //Envoyer à la vue
       /*  return view('category.index', ['categories' => $categories]); */
        return view('category.index', compact('categories'));
    }
    
    public function create(){
        $category = new Category();
        return view('category.edit', compact('category'));
        
    }

    public function store(StoreCategoryRequest $request){
        // Troisième forme de validation du formulaire
        $validated = $request->validated();

        $nom = $request->input('nom');
        $category = new Category();
        $category->nom = $nom;
        $category->save();
        return view('category.show', compact('category'));        
    }

    public function show($id){
        $category = Category::find($id);
        return view('category.show', compact('category'));        
    }

    public function edit($id){
        $category = Category::find($id);
        return view('category.edit', compact('category'));        
    }

    public function update(Request $request, $id){
        // Première forme de validation du formulaire
        $validated = $request->validate([
            'nom' => 'required|min:3|max:15|unique:App\Models\Category,nom',
        ]);

        $nom = $request->input('nom');
        $category = Category::find($id);
        $category->nom = $nom;
        $category->save();
        return view('category.show', compact('category'));
    }

    public function destroy($id){

        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
