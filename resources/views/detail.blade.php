<head>
  <style>
    img {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 150px;
    }
  </style>
</head>

<main>
  @foreach($data as $food)

  <h1>{{$food->name}}</h1><br>
  <h1>{{$food->price}}</h1><br>
  <h1> {{$food->description}}</h1><br>
  <h1> {{$food->category}}</h1><br>
  @endforeach
</main>