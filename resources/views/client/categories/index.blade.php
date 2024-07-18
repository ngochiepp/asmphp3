<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dòng sản phẩm</title>
</head>
<body>
   <div class="container">
    <h1>Dòng sản phẩm</h1>
    <th>
        <a href="{{route('product.create')}}" class="btn btn-success">Create new</a>
    </th>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cate)
                <tr>
                    <th scope="row">{{$cate->id}}</th>
                    <td>{{$cate->name}}</td>
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