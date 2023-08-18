<x-app-layout>
    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 180px;
        }
    </style>
    <div class=" custom-cardlist ms-5">
        <div class="col-sm-10">
            <div class="tranding-wrapper">
                <h3>Result for Items</h3>
                <br>
                <a href="orders" class="btn btn-success">Order Now</a> <br><br>
                @foreach ($products as $item)
                <div class="row searched-item cardlist-diveder">
                    <div class="col-sm-3">
                        <img class="cardlist-image" src="{{$item->gallery}}">
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h2>{{$item->name}}</h2>
                            <h3>Rs-{{$item->price}}</h3>
                            <h5>{{$item->description}}</h5><br>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->carts_id}}" class="btn btn-warning">Remove from cart</a><br>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>