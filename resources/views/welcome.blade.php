<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search by entities</title>

        <link href="/assets/css/app.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div>
            <form id="searchForm" action="" method="get">
                <input type="text" name="search" value="{{ Request::get('search') }}" 
                    placeholder="Enter name of city or region"
                    autocomplete="off">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="table_block">
            <table>
                <thead>
                    <tr>
                        <th class="column1">Region</th>
                        <th class="column2">City</th>
                        <th class="column3">District</th>
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
