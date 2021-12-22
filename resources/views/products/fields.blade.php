<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie_id', 'Categorie Id:') !!}
    {!! Form::select('categorie_id', $categoryItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url_img', 'Url Img:') !!}
    {!! Form::text('url_img', null, ['class' => 'form-control']) !!}
</div>