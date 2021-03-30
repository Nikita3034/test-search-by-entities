<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
        <link href="/assets/css/app.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div>
            <form id="searchForm" action="" method="get">
                <input type="text" name="query" value="{{ Request::get('query') }}" 
                    placeholder="Введите название города или района"
                    autocomplete="off">
                <input type="submit" value="Искать">
            </form>
        </div>
        <div class="table_block">
            <table>
                <thead>
                    <tr>
                        <th class="column1">Регион</th>
                        <th class="column2">Город</th>
                        <th class="column3">Район</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collections as $collection)
                        <tr>
                            <td class="column1">{{$collection->region_name}}</td>
                            <td class="column2">{{$collection->city_name}}</td>
                            <td class="column3">{{$collection->district_name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
