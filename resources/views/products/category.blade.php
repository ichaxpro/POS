<!DOCTYPE html>
<html>
<head><title>Produk - {{ $category_name }}</title></head>
<body>
    <h1>Daftar Produk Kategori: {{ $category_name }}</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>