@extends('master')
@section('content')
    <h1>Products</h1>
    <form action="{{ route('product.create') }}" method="get">
        <button class="btn btn-success mb-1" type="submit">Tạo mới một Product</button>
    </form>

    <table class="table table-success table-striped">
        <tr>
            <th>Tên</th>
            <th>Giá</th>
            <th>description</th>
            <th>img</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ number_format($product->price, 0, ',', '.') }}₫</td>
            <td>{{ $product->description }}</td>
            <td><img style="width: 100px" src="{{ asset($product->img) }}" alt=""></td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->brand->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <form action="/product/{{ $product->id }}/edit" method="GET">
                    <button class="btn btn-warning" type="submit">Sửa</button>
                </form>
                <form action="{{ route('product.destroy', $product) }}" method="POST">
                @csrf
                @method('delete')
                    <button class="btn btn-danger" type="submit">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
@endsection