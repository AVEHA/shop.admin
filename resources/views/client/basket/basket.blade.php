@extends('client.layout')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Корзина</h3>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                <tr>
                    <th>Продукт</th>
                    <th>Количество</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    {{$product->count()}}
                                    <a href="#" class="btn btn-info"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-minus"></i></a>
                                </div>
                            </td>
                            <td>{{$product->price}}$</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
