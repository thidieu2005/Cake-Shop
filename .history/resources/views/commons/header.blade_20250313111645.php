value="@if($product['item']['promotion_price']==0){{($product['item']['unit_price'])}}@else {{($product['item']['promotion_price'])}}@endif">@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}}@else
{{number_format($product['item']['promotion_price'])}}@endif</span></span>
</div>
</div>
</div>
@endforeach

<div class="cart-caption">
	<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value"
			value="@if(Session::has('cart')){{($totalPrice)}}@else 0 @endif">@if(Session::has('cart')){{number_format($totalPrice)}}@else
			0 @endif đồng</span></div>
	<div class="clearfix"></div>

	<div class="center">
		<div class="space10">&nbsp;</div>
		<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i
				class="fa fa-chevron-right"></i></a>
	</div>
</div>
</div>
</div> <!-- .cart -->
@endif
</div>

<!-- WISHLIST -->

<div class="beta-comp">
	@if(isset($wishlists))
	<div class="dropdown">
		<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-heart"></i> Wishlist (@if(isset($wishlists)&&count($wishlists)>0){{$sumWishlist}}@else
			Trống @endif)
		</button>

		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<div class="dropdown-item">
				@for($i = 0; $i< count($wishlists);$i++) <div class="cart-item"
					id="cart-item{{$productsInWishlist[$i]->id}}">
					<a class="cart-item-delete" href="/wishlist/delete/{{$wishlists[$i]->id}}"><i
							class="fa fa-times"></i></a>
					<div class="media">
						<a class="pull-left" href="#"><img src="source/image/product/{{$productsInWishlist[$i]->image}}"
								alt="product"></a>
						<div class="media-body">
							<span class="cart-item-title">{{$productsInWishlist[$i]->name}}</span>
							<span class="cart-item-amount">{{$wishlists[$i]->quantity}}*<span
									id="dongia{{$productsInWishlist[$i]->id}}">@if($productsInWishlist[$i]->promotion_price==0){{number_format($productsInWishlist[$i]->unit_price)}}@else
									{{number_format($productsInWishlist[$i]->promotion_price)}}@endif</span></span>
						</div>
					</div>
			</div>
			@endfor
		</div>

		<div class="dropdown-item">