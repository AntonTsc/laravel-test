<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Notes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Notas</h1>
  <ul>
    @foreach ($notes as $note)
        <li>{{$note->title}}</li>
    @endforeach
  </ul>
</body>
</html>
