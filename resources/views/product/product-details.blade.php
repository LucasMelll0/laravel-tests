@extends('core.layout')
@section('title', $product->name)
@section('content')
    <div class="container my-5">
        <div class="row g-5">
            <div class="col-md-6">
                {{-- Coluna da Imagem do Produto --}}
                <div class="text-center">
                    <img src="https://picsum.photos/600" class="img-fluid rounded shadow-sm" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="col-md-6">
                {{-- Coluna de Informações do Produto --}}
                <div class="card border-0">
                    <div class="card-body px-0">
                        <h1 class="card-title h2">{{ $product->name }}</h1>
                        <p class="card-subtitle mb-3 text-muted">
                            Vendido por: {{ $product->user->name }}
                        </p>
 
                        <span class="badge bg-primary mb-3">{{ $product->category->name }}</span>
 
                        <h2 class="h4">Descrição</h2>
                        <p class="card-text text-muted">{{ $product->description }}</p>
 
                        <div class="my-4">
                            <span class="h3 fw-bold">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                        </div>
 
                        <div class="d-grid gap-2 d-sm-flex">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#product-buy-modal"
                                class="btn btn-primary btn-lg flex-grow-1">
                                Comprar agora
                            </button>
 
                            <button type="button" class="btn btn-outline-primary btn-lg d-flex align-items-center justify-content-center"
                                data-bs-toggle="modal" data-bs-target="#add-to-cart-modal">
                                <i class="material-icons me-2">shopping_cart</i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modals.app-modal id="product-buy-modal" title="{{ $product->name }}" confirmButton="Confirmar">
        <p> Você realmente deseja comprar o produto <small>{{ $product->name }} </small> por <strong>
                ${{ $product->price }} </strong></p>
    </x-modals.app-modal>

    <x-modals.app-modal id="add-to-cart-modal" title="Adicionar ao carrinho" confirmButton="Confirmar">
        <p> Você realmente deseja adicionar o produto <small>{{ $product->name }} </small> ao carrinho?</p>
    </x-modals.app-modal>

@endsection
