<body style='background-color: lightgreen'>
    <h1 align="center">Edit Product</h1>

    <form action="/products" method="POST">
        @csrf
        <fieldset>
            @csrf
            <pre>
            <font size="4">Name</font><br>
            <input type="text" name="name" size="50">

            <font size="4">Description</font><br>
            <input type="text" name="description" size="50">

            <font size="4">Price</font><br>
            <input type="text" name="price" size="50">
            
            <font size="4">Image Url</font><br>
            <input type="text" name="image_url" size="50">
            </pre>
            <input type="submit" value="Save">
        </fieldset>
    </form>