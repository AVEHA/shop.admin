@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование продукта {{$product->title}}</h3>
        </div>
        <form role="form" action="{{route('products.update', ['product'=> $product->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" class="form-control" id="title" placeholder="" value="{{$product->title}}">
                </div>
                <div class="form-group">
                    <label for="price">Стоимость товара</label>
                    <input type="number" class="form-control" id="price" placeholder="" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label for="thumbnail">Изображение</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="thumbnail">
                            <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="brief_description">Краткое описание товара</label>
                    <textarea class="form-control" id="brief_description" rows="3" placeholder="" >{{$product->brief_description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="full_description">Полное описание товара</label>
                    <textarea id="full_description" name="content" class="form-control" @error('full_description') aria-invalid @enderror rows="7">{{$product->full_description}}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
