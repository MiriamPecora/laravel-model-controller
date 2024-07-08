<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="d-flex gap-4 py-3 flex-wrap">
        @foreach ($movies as $movie)
            <div class="card mx-auto text-center" style="width: 18rem;">
                <div class="card-body"> 
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                    <p class="card-text">{{ $movie['nationality'] }}</p>
                    <div class="d-flex justify-content-between">
                        <span class="card-text">{{ $movie['date'] }}</span>
                        <span class="card-text">{{ $movie['vote'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
