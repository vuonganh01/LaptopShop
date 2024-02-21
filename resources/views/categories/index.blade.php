@extends('master')
@section('content')

<h1>Category</h1>
<form action="{{ route('category.create') }}" method="get">
    <button class="btn btn-success mb-1" type="submit">Tạo mới một Category</button>
</form>

<table class="table table-dark table-striped">
    <tr>
        <th>Tên</th>
        <th>slug</th>
        <th>description</th>
        <th>img</th>
        <th>Hành động</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td>{{ $category->slug }}</td>
        <td>{{ $category->description }}</td>
        <td><img style="width: 100px" src="{{ asset($category->img) }}" alt=""></td>
        <td>
            <form action="/category/{{ $category->id }}/edit" method="GET">
                <button class="btn btn-warning" type="submit">Sửa</button>
            </form>
            <form action="{{ route('category.destroy', $category) }}" method="POST">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Xoá</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
@endsection
    