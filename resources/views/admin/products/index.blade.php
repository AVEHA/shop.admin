@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список продуктов</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if($products->count())
            <table class="table table-bordered">

                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Наименование</th>
                    <th>Slug</th>
                    <th>Цена</th>
                    <th>Дата обновления</th>
                    <th style="width: 40px">Операции</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->slug}}</td>
                    <td>{{$product->price}}$</td>
                    <td>{{$product->updated_at}}</td>
                    <td>
                        <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-info btn-sm float-left mr-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{route('products.destroy', ['product' => $product->id])}}" method="post" class="float-left">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <p>Записей пока нет</p>
            @endif
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
@endsection
