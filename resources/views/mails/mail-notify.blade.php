<body>
    <p>{{ $data['msg'] }}</p>
    <p>Đặt hàng thành công</p>
    <p>Chi tiết đơn hàng: #{{ $data['madh'] }}</p>

    <div class="your-order-body">
        <div class="your-order-item">
            @if(isset($data['cart']))
                @foreach($data['cart']->items as $product)
                    <div class="media">
                        <img width="35" src="{{ asset('source/image/product/' . $product['item']['image']) }}" alt="" class="pull-left">
                        <div class="media-body">
                            <p class="font-large">{{ $product['item']['name'] }}</p>
                            <span class="color-gray your-order-info">Số lượng: {{ $product['qty'] }}</span>
                        </div>
                    </div>
                @endforeach
            @endif
        </div> <!-- end one item -->

        <div class="your-order-item">
            <div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
            <div class="pull-right">
                <h5 class="color-black">
                    @if(isset($data['cart']))
                        {{ number_format($data['cart']->totalPrice) }} VNĐ
                    @endif
                </h5>
            </div>
        </div> <!-- end total -->
    </div>

    <div class="clearfix"></div>

    <div>
        {{ $data['content'] ?? '' }}
    </div>
</body>
