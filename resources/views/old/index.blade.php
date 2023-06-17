<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>index</div>
    <div>
        <table border="1">//tạo bảng hiển thị
            <tr>
                <th>ID</th>
                <th>animal_name</th>
                <th>human_name</th>
                <th>alien_name</th>
                <th>edit</th>
                <th>delete</th>

            </tr>
            @foreach ( $olds as $old )
            <tr>
                <td>{{ $old ->id }}</td>
                <td>{{ $old ->animal_name }}</td>
                <td>{{ $old ->human_name}}</td>
                <td>{{ $old ->alien_name }}</td>
                <td><a href="{{route('old.edit',['old' => $old])}}">Edit</a></td> <!--có đường dẫn đến route tên là old.edit đồng thời truyền vào tham số old trong rote đó bằng =>$old -->
                
                <td><form method="post" action="{{ route("old.delete",['old'=>$old] )}}"> <!--có đường dẫn đến route tên là old.delete đồng thời truyền vào tham số old trong rote đó bằng =>$old -->
                    @csrf <!-- thẻ bảo mật -->
                    @method('delete')<!-- method xác định ngầm là delete  -->
                    <input type="submit" value="delete"></form></td></tr>
                
            @endforeach
        </table>
    </div>
</body>
</html>