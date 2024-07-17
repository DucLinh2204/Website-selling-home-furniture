@extends('layout')
@section('title')
    Cửa hàng {{$category_id}}
@endsection
@section('body')

		<!-- Start Hero Section -->
		<div class="container">
			<div class="my-2">

				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a style=" color: #03989E ;">Cửa Hàng</a></li>
					  <li class="breadcrumb-item active" aria-current="page">
						@foreach ($categories as $dm)
							@if ($dm->id == $category_id)
								{{ $dm->name }}
							@endif
						@endforeach
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- End Hero Section -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@foreach ($categories as $dm)
						@if ($dm->id == $category_id)
							<h1>{{ $dm->name }}</h1>
						@endif
					@endforeach

				</div>
			</div>
		</div>

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
				<div class="row">
						@foreach($products as $sp)
							<!-- Start Column  -->
							<div class="col-12 col-md-4 col-lg-3 mb-5">
								<a class="product-item" href="{{ url('/detail',[$sp->id]) }}">
									<img src="../images/product/{{$sp->image }}" class="img-fluid product-thumbnail">
									<h3 class="product-title">{{ $sp->name }}</h3>
                                    <p class="product-price text-decoration-line-through">{{ number_format($sp->price) }} VNĐ</p>
                                    <strong class="product-price" style="color: #03989E;">{{number_format($sp->sale_price) }} VNĐ</strong>
									<span class="icon-cross">
										<img src="../images/cross.svg" class="img-fluid">
									</span>
								</a>
							</div>
							<!-- End Column  -->
						@endforeach
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="text-center" style="color: #03989E;">
									<div class="pagination justify-content-center" >
										{{ $products->links() }}
									</div>
								</div>
							</div>
						</div>
					</div>

			</div>

		</div>

@endsection
