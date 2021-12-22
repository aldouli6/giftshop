 
 <div class="row justify-content-around">
  


  
 
 @foreach($products as $product)
        <div class="col-6 col-sm-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $product->url_img }}" height="300">
            <div class="card-body">
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->description }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->url_img }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                    <h5 class="card-title">{{ $product->description }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $categoryItems[ $product->categorie_id] ?? '' }}</h6>
                    <p class="card-text">${{ $product->price }}</p>
                    <button  class="btn btn-primary">Add To Cart</button>
                </form>
            </div>
            </div>
        </div>
@endforeach

</div>