@extends('core.layout')

@section('title', 'Lojinha 🐘')
@section('content')
    <div class="container text-center my-4">
        <div style="grid-template-columns: 1fr 1fr;" class="d-grid gap-1 row-gap-3">
            @foreach ($products as $product)
                <x-product.product-item :product="$product" />
            @endforeach
        </div>
    </div>

    <div class="container text-center mx-4 my-4">
        {{ $products->links() }}
    </div>


@endsection
