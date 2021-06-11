<h1 align="center">List Products</h1>

<body style='background-color:lightgreen'>
    <table class="table" , border="1">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="/products/{{$product->id}}/edit">Edit</a>
                    <form action="/products/{{$product->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <a href="/products/create">Create</a>
    </table>