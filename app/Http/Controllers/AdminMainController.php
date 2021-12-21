<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input;
use App\Post;
use App\Category;

class AdminMainController extends Controller
{
    /**
     * middleware pour l'authentification
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }

    /**
     * accueil
     * 
     * @return View
     */
    public function index(Request $request){
        $post= Post::with('category')->get();//associer avec le modele category
        $title=$request->get('title');            //recuperer la valeur venant du middleware
        return view('admin/main',compact('post','title'));
    }

  /**
     * formulaire d'insertion
     * 
     * @return view
     */
    public function create(){
        $categories=Category::all();
        return view('admin/insert',compact('categories'));
    }

      /**
     * info pour un article
     * @param $id
     * @return View
     */
    public function about($id){
        $post= Post::findOrFail($id);
       return view('admin/about',compact('post'));
    }
    
      /**
     * gestion d'insertion
     * 
     * @return Response
     */
    public function store(Request $request){
      if($request->hasFile('img')&&$request->filled('name','price','qty')){  //verifier si les champ sont pas vide
        
        $file = $request->file('img');
        $name = $request->input('name');
        $price=$request->input('price');
        $qty=$request->input('qty');
        $category_id=$request->input('category_id');

        $file->move('images/datasheets', 'toky'.$name.'.jpg');     //copy l'image dans public
      
        $product=Post::firstOrCreate(['name'=>$name,'price'=>$price.'Ar','qty'=>$qty,'img'=>'images/datasheets/toky'.$name.'.jpg','category_id'=>$category_id]);
        return redirect()->route('index');
      }
      else{
      return redirect()->route('store');
      }

    }

      /**
     * formulaire d'edition
     * @param $id
     * @return view
     */
    public function edit($id){
        $post= Post::findOrFail($id);
        $categories=Category::all();
        
      return view('admin/update',compact('post','categories'));
      
    }

      /**
     * gestion de modification
     * @param $id
     * @return view
     */
    public function update($id,Request $request){

        $post= Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('index');
      
    }

      /**
     * gestion de supprimation
     * 
     * @return redirect
     */
    public function delete($id){
     
        $post= Post::findOrFail($id);
        $post->delete();
        return redirect()->route('index');
      
    }
}
