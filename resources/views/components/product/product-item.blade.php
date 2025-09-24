<div>
    <div class="shadow card mb-3 rounded-1" style="max-width: 30rem;">
        <div class="row g-0 align-items-center">
            <div class="col-md-4">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="{{ $product->slug }}">
            </div>
            <div class="col-md-8">
                <div class="card-body text-start">
                    <h5 class="card-title"> {{ $product->name }}</h5>
                    <p class="card-text"> {{ $product->description }}</p>
                    <p class="card-text fw-bold"> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                    <a href="{{ route('app.product-details', $product->slug) }}" class="btn btn-primary ">Ver
                        produto</a>
                </div>
            </div>
        </div>
    </div>
</div>
