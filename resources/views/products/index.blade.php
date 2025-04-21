<!DOCTYPE html>
<html>
<head>
    <title>Product E-Commerce</title>
</head>

<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach($products as $id => $products)
        <li>
            <a href="{{ url('/product/' . $id) }}">
                {{ $products['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.')}}
            </a>
        </li>
        @endforeach
    </ul>
    
</body>

</html>
