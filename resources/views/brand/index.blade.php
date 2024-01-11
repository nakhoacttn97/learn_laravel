<a href="/">Back Home</a>
<a href="/brand/add">Add Brand</a>

<?php var_dump($arr) ?>

<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Command</th>
    </thead>
    <tbody>
        <!-- trong file namefile.blade.php -> su dung cu phap duyet vong lap khac cu phap php thong thuong -->
        @foreach($arr as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>
                    <a href="/brand/details/{{$v->id}}">Details</a>
                    <a href="/brand/edit/{{$v->id}}">Edit</a>
                    <a href="/brand/delete/{{$v->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>