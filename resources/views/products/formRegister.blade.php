@extends('layouts.app')

@section('content')

    <section class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Cadastrar Produto</h1>
            </div>
        </div>
        
        <form action="/produtos/cadastrar" method="post" enctype="multipart/form-data">
            @csrf

            <div class="from-group">
                <label for="nameProduct">Nome do Produto</label>
                <input class="form-control" type="text" name="nameProduct" id="nameProduct">
            </div>
            <div class="from-group">
                <label for="descriptionProduct">Descrição do Produto</label>
                <textarea class="form-control" name="descriptionProduct" id="descriptionProduct" rows=4 style="resize: none;"></textarea>
            </div>
            <div class="from-group">
                <label for="quantityProduct">Quantidade</label>
                <input class="form-control" type="number" name="quantityProduct" id="quantityProduct">
            </div>
            <div class="from-group">
                <label for="priceProduct">Preço</label>
                <input class="form-control" type="number" name="priceProduct" id="priceProduct">
            </div>
            <div class="from-group">
                <label for="imgProduct">Imagem</label>
                <input class="form-control" type="file" name="imgProduct" id="imgProduct">
            </div>
            <div class="from-group">  
                <button class="mt-3 py-1 px-3"type="submit">Cadastrar</button>
            </div>
            
        </form>

        <div class="row">
            <div class="col-md-12">
                @if(isset($result))
                    @if($result)
                        <h1>Deu certo campeão</h1>
                    @else
                        <h1>Não deu certo o cadastro</h1>
                    @endif
                @endif
            </div>
        </div>
    
    </section>


@endsection
