@extends('layouts.app');

@section('content')

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Atualização do Produto</h1>
            </div>
        </div>

        @if(isset($product))
        <form action="/produtos/atualizar" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="idProduct" value="{{$product->id}}" hidden>

            <div class="form-group">
                <label for="nameProduct">Nome do Produto</label>
                <input class="form-control" type="text" name="nameProduct" id="nameProduct" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="descriptionProduct">Descrição</label>
                <textarea id="descriptionProduct" name="descriptionProduct" class="form-control">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="quantityProduct">Quantidade do Produto</label>
                <input class="form-control" type="number" name="quantityProduct" id="quantityProduct" value="{{$product->quantity}}">
            </div>
            <div class="form-group">
                <label for="priceProduct">Preço do Produto</label>
                <input class="form-control" type="number" name="priceProduct" id="priceProduct" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="imgProduct">Imagem do Produto</label>
                <input class="form-control" type="file" name="imgProduct" id="imgProduct" >
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Atualizar Produto</button>
            </div>

        </form>

        @elseif(isset($result))


        @else
            <h1>Você não passou um id ou o produto não existe!</h1>
        @endif

        <div class="row">
            <div class="col-md-12">
                @if(isset($result))
                    @if($result)
                        <h1>Deu certo campeão! </h1>
                    @else
                        <h1>Não deu certo sua Atualização, e foi sua culpa! </h1>
                    @endif
                @endif
            </div>
        </div>

    </section>
@endsection 