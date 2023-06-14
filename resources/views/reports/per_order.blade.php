<table>
    <thead>
        <tr>
            <th>orderid</th>
            <th>placed_by</th>
            <th>company_name</th>
            <th>date</th>
            <th>total</th>
            <th>items</th>
        </tr>
    </thead>
    <tbody>
        @foreach($per_order as $row)
        <tr>
            <td>{{ $row['orderid'] }}</td>
            <td>{{ $row['placed_by'] }}</td>
            <td>{{ $row['company_name'] }}</td>
            <td>{{ $row['date'] }}</td>
            <td>{{ $row['total'] }}</td>
            <td>{{ $row['items'] }}</td>{{-- substr() to remove leading comma --}}
        </tr>
        @endforeach
    </tbody>
</table>