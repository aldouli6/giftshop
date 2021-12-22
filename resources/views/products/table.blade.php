<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Description</th>
        <th>Categorie Id</th>
        <th>Price</th>
        <th>Url Img</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $categoryItems[ $product->categorie_id] ?? '' }}</td>
            <td>{{ $product->price }}</td>
            <td><img src="{{ $product->url_img }}"  width="50" height="60"></td>
                <td width="120">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
