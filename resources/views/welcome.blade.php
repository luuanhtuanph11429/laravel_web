<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{--link cdn bosstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    <button class="btn btn-primary"> button bosstrap WE162016</button>
    <table class="table">
        <thead>
        
          <tr>
            <th scope="col">stt</th>
            <th scope="col">Tên</th>
            <th scope="col">Tuổi</th>
            <th scope="col">lớp</th>
            <th scope="col">msv</th>
            <th scope="col">img</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $item)
         @if($item['id']==1)
         <tr>
          <th scope="row">1</th>
          <td>{{$item['name']}}</td>
          <td>{{$item['age']}}</td>
          <td>{{$item['class']}}</td>
          <td>{{$item['id']}}</td>
          <td><img a href=""><img src="https://cellphones.com.vn/sforum/wp-content/uploads/2018/11/2-9.png" alt=""></td>
        </tr>
        @endif
          @endforeach

         
        </tbody>
      </table>
    {{-- link cdn bosstrap js--}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>