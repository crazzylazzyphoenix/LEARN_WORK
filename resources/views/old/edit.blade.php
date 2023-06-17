<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>create</div>
   
    <form method="post" action="{{route('old.update',['old'=>$old])}}">
        @csrf <!-- thẻ bảo mật--> <!-- --> 
        @method('put')<!-- method xác định ngầm là put  -->
        <div>
            <label>name</label>
            <input type="text" name="human_name" placeholder="human_name"value={{ $old->human_name }}><!-- xác định giá trị hiện tại đã hoặc chưa thay đổi để hiển thị và truyền đi  --> 
        </div>
        <label>animal_name</label>
        <input type="text" name="animal_name" placeholder="animal_name"value={{ $old->animal_name }}><!-- xác định giá trị hiện tại đã hoặc chưa thay đổi để hiển thị và truyền đi  -->
        </div>
        <div>
            <label>alien_name</label>
            <input type="text" name="alien_name" placeholder="alien_name"value={{ $old->alien_name }}><!-- xác định giá trị hiện tại đã hoặc chưa thay đổi để hiển thị và truyền đi  -->
        </div>
        <div>
            <input type="text" name="description" placeholder="description">
        </div>
        <div><input type="submit" value="update"></div>
    </form>
    
</body>

</html>