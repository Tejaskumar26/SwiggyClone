<x-app-layout>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <x-slot name="header">
    <div class="d-flex justify-content-end">
      <ul class="nav justify-content-end">
        <form action="search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
            <button type="submit" class="btn btn-default">Find Food</button>
          </div>
        </form>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cart">Cart({{$count}})</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </x-slot>

  <main>
    <style>
      img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 240px;
        float: left;
      }

      .search-box {
        width: 300px !important;
      }
    </style>

    <h1>Foods</h1></a>
    <div class="row ms-5">
      @foreach($details as $food)
      <div class="col-4 ms-5">
        <p><img class="slide-image" src="{{$food['gallery']}}"><br/>
          {{$food->name}}<br><span class="text-danger">Prize: {{$food->price}}<br /></span>
          {{$food->description}}<br />
          {{$food->category}}<br />
        </p>
        <form action="/add_to_cart" method="post">
          @csrf
          <input type="hidden" name="food_id" value={{$food['id']}}>
          <button class="btn btn-primary ms-5 mb-4">Add to Cart</button>
        </form>
      </div>
      @endforeach
    </div>
  </main>
</x-app-layout>