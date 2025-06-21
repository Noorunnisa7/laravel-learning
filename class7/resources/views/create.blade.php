<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Create Product</h1>

<section class="container">
    <div class="row">
        <div class="col-6">
            <form method="POST" action="{{Route('addData')}}">
                @csrf
                <input type="text" placeholder="Enter name" name="name" class="form-control mb-3">
                <input type="number" placeholder="Enter price" name="price" class="form-control mb-3">
                <input type="number" placeholder="Enter stock" name="stock" class="form-control mb-3">
                <input type="text" placeholder="Enter description" name="description" class="form-control mb-3">
                <button class="btn btn-dark">Create Product</button>
            </form>
        </div>
    </div>
</section>

@if(session()->has('message'))
<p>{{session()->get('message')}}</p>
@endif


@if($errors->any()) 
    @foreach($errors->all() as $error)
       <p>{{$error}}</p>
    @endforeach
@endif