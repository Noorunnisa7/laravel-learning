<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<section class="container">
    <div class="row">
        <a href="{{Route('trash')}}" class="btn btn-danger col-2">Trash </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sno </th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        {{$product->id}}
                    </td>
                    <td>
                        {{$product->name}}
                    </td>
                    <td>
                        {{$product->price}}
                    </td>
                    <td>
                        {{$product->stock}}
                    </td>
                    <td>
                        {{$product->description}}
                    </td>
                    <td>
                        <button class="btn btn-primary">Edit</button>

                        <form action="{{Route('deleteData' , $product->id )}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>

        @endif

    </div>
</section>