<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ create</title>
</head>
<body>

 

  <form method="POST" action="/createNew">


    @csrf

    <input type="text" name="catId" id="catId" placeholder="catId">
    <input type="text" name="question" id="question">
    <textarea name="answer" id="answer"></textarea>

    <button type="submit">Create</button>

  </form>
  <hr>
  <h3>add category</h3>

  <form method="POST" action="/catCreate">


    @csrf

    <input type="text" name="category" id="category" placeholder="category">

    <button type="submit">Create</button>

  </form>

  <a href="{{ '/' }}">Get back to home page</a>
  

  
</body>
</html>