<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ CRUD</title>
</head>
<body>

 

  <form method="POST" action="/update/{{ $qusId->id }}">

    @method('PUT')

    @csrf


    <input type="text" name="question" id="question" value="{{ $qusId->questions }}">
    <textarea name="answer" id="answer">{{ $qusId->answer }}</textarea>

    <button>Update</button>

  </form>
  

  
</body>
</html>