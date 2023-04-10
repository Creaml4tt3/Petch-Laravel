<!DOCTYPE html>
<html>

<head>
  <title>Sale</title>
</head>

<body>
  <h1>Sale</h1>
  <ul>
    @foreach ($data as $data)
    <li>
      {{$data}}
    </li>
    @endforeach

  </ul>
</body>

</html>