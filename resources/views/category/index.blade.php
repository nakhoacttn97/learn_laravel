<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Command</th>
        </tr>
    </thead>
    <tbody>
        @foreach($arr as $v)
            <tr>
                <td>{{$v->category_id}}</td>
                <td>{{$v->category_name}}</td>
                <td>
                    <a href="/category/edit/{{$v->category_id}}">Edit</a>
                    <a href="/category/delate/{{$v->category_id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>