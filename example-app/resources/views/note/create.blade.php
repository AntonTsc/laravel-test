<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Insert note</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <a href="{{ route('note.index') }}">Atras</a>
    <h1>Insert Note</h1>
    <form action="{{ route('note.store') }}" method="POST">
      @csrf
      <label for="title">Title</label><br>
      <input type="text" id="title" name="title"><br>

      <label for="description">Description</label><br>
      <input type="text" id="description" name="description"><br><br>
      
      <input type="submit" value="Submit">
    </form> 
</body>
</html>