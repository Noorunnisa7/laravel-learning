<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>Welcome to my website</h1>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <h1 class="text-center">fill this form</h1>
                <form method="post" action="{{Route('formSubmit')}}">
                    @csrf
                    <input type="text" placeholder="Enter Name" name="name" class="form-control mb-3">
                    <input type="email" placeholder="Enter email" name="email" class="form-control mb-3">
                    <input type="number" placeholder="Enter Number" name="number" class="form-control mb-3">
                    <input type="text" placeholder="Enter address" name="address" class="form-control mb-3">
                    <button class="btn btn-dark w-100">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>