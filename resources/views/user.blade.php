<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div>
        <div>
            ID : {{$id}} <br>
            Name : {{$dataUrl['name']}} <br>
            Name : {{$dataUrl['class']}} <br>
            Info : {{$dataUrl['info']}}
        </div>
    </div>
    <table class="table">
        <thead>
        
          <tr>
            <th scope="col">stt</th>
            <th scope="col">Name</th>
            <th scope="col">height</th>
            <th scope="col">weight</th>
            <th scope="col">age</th>
            <th scope="col">gender</th>
            <th scope="col">avatar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $item)
         <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$item['name']}}</td>
          <td>{{$item['height']}}</td>
          <td>{{$item['weight']}}</td>
          <td>{{$item['age']}}</td>
          <td>{{$item['gender']}}</td>
          <td><img a href=""><img src="{{$item['avatar']}}" width="100px" height="100px" alt=""></td>
        </tr>
          @endforeach     
        </tbody>
      </table>
</body>
</html>