<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Corex Task - Ibrahem Tantawy</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
    </head>
    <body>

        <div class="my-5 d-flex justify-content-center">
            <form class="form-inline" id="searchForm" action="/" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="language" name="language" placeholder="Programing language">
                    <input type="date" class="form-control" id="date" name="date" placeholder="date">
                    <select class="custom-select ml-2" name="top" id="top">
                        <option value="10">View the top 10</option>
                        <option value="50">View the top 50</option>
                        <option value="100">View the top 100</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="d-flex justify-content-center">
            <h3>Github Repos</h3>
        </div>
        <div class="container h-100" id="results">
                @if(isset($items))
                    @foreach ($items as $item)
                        <div class="row h-100 justify-content-center align-items-center">
                            <div class="card w-75 my-3">
                                <div class="card-body">
                                    <p class="card-text ">Repository :  {{$item['name']}}</p>
                                    <p class="card-text">Stars:  {{$item['stargazers_count']}}</p>
                                    <p class="card-text">Owner:  {{$item['owner']['login']}}</p>
                                    <p class="card-text">Language:  {{$item['language']}}</p>
                                    <p class="card-text">Date:  {{$item['created_at']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

    </body>

</html>
