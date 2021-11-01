<h1>FAQ</h1>
<table border="1">
    <tr>
        <th>link</th>
        <th>description</th>
    </tr>

    <tr>
        <td><a href="{{ route('get_all_countries') }}"><b>/countries/</b></a></td>
        <td>get all countries</td>
    </tr>
    <tr>
        <td><a href="{{ route('search', 'us') }}"><b>/countries/search/{name}</b></a></td>
        <td>search {name : us} company</td>
    </tr>
    <tr>
        <td><a href="{{ route('get_info', 'Russia') }}"><b>/countries/get/{name}</b></a></td>
        <td>get {name : Russia} country companies and users</td>
    </tr>

</table>
