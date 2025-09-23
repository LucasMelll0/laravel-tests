@extends('core.layout')
@section('title', $product->name)
@section('content')

    <div class="container text-start mx-auto my-4">
        <div class="row align-items-center">
            <div class="col"> {{-- Product Image col --}}
                <img src="https://picsum.photos/600" class="rounded mx-auto img-fluid" alt="...">
            </div>
            <div class="col"> {{-- Product info col --}}
                <h2>
                    {{ $product->name }}
                </h2>
                <h5 class="my-3">
                    anúncio de
                    <small class="text-muted">
                        {{ $product->user->name }}
                    </small>
                </h5>
                <h3>
                    <small class="text-muted"> {{ $product->description }} </small>
                </h3>
                <h4 class="my-4">
                    ${{ $product->price }}
                </h4>
                <button type="button" data-bs-toggle="modal" data-bs-target="#product-buy-modal"
                    class="btn btn-primary my-3 mx-auto">Comprar agora</button>

                <button type="button" class="btn btn-outline-primary mx-auto text-center align-items-center"
                    data-bs-toggle="modal" data-bs-target="#add-to-cart-modal">
                    <i class="small material-icons">shopping_cart</i>
                    Adicionar ao carrinho
                </button>

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
