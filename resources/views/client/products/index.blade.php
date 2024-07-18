<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1>Danh sách sản phẩm</h1>
    <th>
        <a href="{{route('product.create')}}" class="btn btn-success">Create new</a>
    </th>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Title</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Machineline</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $pro)
                <tr>
                    <th scope="row">{{$pro->id}}</th>
                    <td>{{$pro->title}}</td>
                    <td><img src="{{$pro->thumbnail}}" width="60" alt=""></td>
                    <td>{{$pro->machineline}}</td>
                    
                    <td>{{$pro->price}}</td>
                    <td>{{$pro->quantity}}</td>
                    <td>{{$pro->name}}</td>
                    <td>
                        <a href="{{route('book.edit', $book->id)}}" class="btn btn-success" >Edit</a>
                        <form action="{{route('book.destroy', $book->id)}}" method="post">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')">Delete</button>
                    
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </div>
</body>

</html>

