<x-app-layout>
    <div class=" custom-cardlist">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>Rs {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rs 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>Rs 10</td>
                    </tr>
                    <tr>
                        <td>total Amount</td>
                        <td>Rs {{$total+10}}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="enter your address" class="form-control" id="email"></textarea>
                        @error('address')
                        <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                        @enderror<br>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method</label><br> <br>
                        <input type="radio" value="online cash" name="payment"><span> online </span></a><br>
                        <a href="form">card </a><br><br>
                        <input type="radio" value="cash" name="payment"><span> Cash On Delivery</span><br> <br>
                        @error('Payment Method')
                        <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                        @enderror<br>
                    </div>
                    <button type="submit" class="btn btn-default">Confirm Order Now</button>
                </form><br><br>
            </div>
        </div>
    </div>
</x-app-layout>