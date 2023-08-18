<x-app-layout>
  <div>
    <div class="col-sm-4">
      <h3>Result for Items</h3>
      @foreach ($data as $item)
      <div class="search-item ms-5">
          <style>
            img {
              border: 1px solid #ddd;
              border-radius: 4px;
              padding: 5px;
              width: 150px;
            }
          </style>
          <img class="treding-image" src="{{$item['gallery']}}">
          <div class="">
            <h2>{{$item->name}}</h2>
        <h2>{{$item->price}}</h2>
      </div>
    </div>
    @endforeach
  </div>
</x-app-layout>