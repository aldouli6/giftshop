@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                {!! Form::open(['route' => 'home']) !!}
                <!-- Categorie Id Field -->
                <div class="form-group ">
                    {!! Form::label('categorie_id', 'Category:') !!}
                    {!! Form::select('categorie_id', $categories, $cat, ['class' => 'form-control custom-select',"onchange" => "this.form.submit()"]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('store.element')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center">
            {!! $products->links() !!}
        </div>
    </div>

</script>
@endsection
