<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use \Input;
use App\Post;

class MainController extends Controller
{
    /**
     * show main application
     * 
     * @return View
     */
    public function index(Request $request){
        $post= Post::with('category')->get();    //associer avec le modele category
        $title=$request->get('title');            //recuperer la valeur venant du middleware
        return view('main',compact('post','title'));
    }

      /**
     * a propos du produit selectionner
     * @param $id
     * 
     * @return View
     */
    public function about($id){
        $post= Post::findOrFail($id);
       return view('about',compact('post'));
    }

      /**
     * method pour rechercher
     * 
     * @return View
     */
    public function search(){
        $search=Input::get('search');
        $post= Post::searchByTitle($search)->get();    //on utilise un scope searchByTitle dands le modele App
        return view('main',compact('post','search'));
    }


     /**
     * appeler une api externe
     * 
     * @return View
     */
    public function getApi(){
        $client = new Client();         
        $url='https://tokybot-apinodejs.herokuapp.com/parkings';   //url del'api externe
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody()); 
        return view('apiMain',compact('responseBody'));
    }



    /**
     * method pour creer une api ,juste pour l'exemple
     * 
     * @return $article
     */
    public function api(){         
        $data=Storage::get('Api/list.json');
        $article=Collect(json_decode($data,true));
        return $article;        
     }
 

}
