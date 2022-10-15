<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-12 text-center mt-5">
                    <h1
                        style="
                     text-shadow: 5px 10px 10px rgba(0, 0, 0, 0.35),
                     -3px 10px 12px rgba(0, 0, 0, 0.25);">
                        This is our special promotion!</h1>
                </div>
                @foreach ($pizzas as $pizza)
                    <div class="col-3">
                        <div class="card" style="">
                            <img src="https://thumbs.dreamstime.com/b/pizza-pepperoni-cheese-salami-vegetables-58914487.jpg"
                                class="card-img-top" width="100%" height="auto">
                            <div class="card-body">
                                <p class="label">{{ $pizza->title }}</p>
                                <p class="card-text">Duration: {{ $pizza->duration }} minutes</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>


</body>

</html>
