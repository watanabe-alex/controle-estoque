<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Auth;

class ProductController extends Controller
{
    //responsável por cadastrar um produto
    public function create(Request $request) {
        $newProduct = new Product();
        $newProduct->name = $request->nameProduct;
        $newProduct->description = $request->descriptionProduct;
        $newProduct->quantity = $request->quantityProduct;
        $newProduct->price = $request->priceProduct;
        $newProduct->user_id = Auth::user()->id;

        $result = $newProduct->save();

        return view('products.form',["result"=>$result]);
    }

    public function update(Request $request) {

        //preciso receber o id de um produto usando o product find
        //vai ser necessário usar rotas com parametro

        $newProduct = Product::find(/* colocar o id de um produto */);
        $newProduct->name = $request->nameProduct;
        $newProduct->description = $request->descriptionProduct;
        $newProduct->quantity = $request->quantityProduct;
        $newProduct->price = $request->priceProduct;
        $newProduct->user_id = Auth::user()->id;
    }

    public function delete(Request $request) {
        //para deletar você vai usar Product::destroy(id)
    }

    public function viewAllProducts(Request $request) {
        //Product::All
    }

    public function viewOneProduct(Request $request) {
        //Product::find
    }


    //exibir formulário (alguns desenvolvedores colocam o nome index() como o nome da função principal)
    public function viewForm(Request $request) {
        return view('products.form'); //página formulário na pasta products
    }

}
