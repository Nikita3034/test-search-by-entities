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
                <input type="text" name="search" value="{{ Request::get('search') }}" 
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
                    @foreach ($cities as $city)
                        @foreach ($city['district'] as $district)
                            <tr>
                                <td class="column1">{{ $city['region']['name'] }}</td>
                                <td class="column2">{{ $city['name'] }}</td>
                                <td class="column3">{{ $district['name'] }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
