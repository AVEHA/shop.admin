@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление продукта</h3>
        </div>
        <form role="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" class="form-control" id="title" name="title" @error('title') aria-invalid @enderror placeholder="Введите наименование">
                </div>
                <div class="form-group">
                    <label for="price">Стоимость товара</label>
                    <input type="number" class="form-control" id="price" name="price" @error('price') aria-invalid @enderror placeholder="Введите цену товара">
                </div>
                <div class="form-group">
                    <label for="thumbnail">Изображение</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                            <label class="custom-file-label" for="thumbnail">Выберите изображение</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="brief_description">Краткое описание товара</label>
                    <textarea class="form-control" id="brief_description" name="brief_description" rows="3" @error('brief_description') aria-invalid @enderror placeholder="Введите краткое описание товара"></textarea>
                </div>
                <div class="form-group">
                    <label for="full_description">Полное описание товара</label>
                    <textarea id="full_description" name="full_description" class="form-control" @error('full_description') aria-invalid @enderror rows="7" ></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
