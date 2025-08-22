@extends('layouts')

@section('content')

	<div class="mt-10 ml-3" id="backButton">
		<a href="/" class="text-black  hover:cursor-pointer"><x-heroicon-s-arrow-left class="w-5" /></a>
	</div>
	<div class="max-w-screen-xl mx-auto mt-10 p-4 text-white flex flex-col min-h-screen" id="productCart">
		<!-- Confirmation Modal -->
		<div id="confirmationModal"
			class="modal hidden fixed inset-0  items-center justify-center bg-black bg-opacity-50 z-50">
			<div class="modal-content bg-white p-4 rounded shadow-lg max-w-md h-auto mx-3">
				<p class="text-lg text-black font-semibold">Apakah kamu yakin ingin membeli Produk ini?</p>
				<div class="flex justify-end mt-4">
					<button id="confirmBuy" class="px-4 py-2 bg-green-500 text-white rounded mr-2 w-auto">YA</button>
					<button id="cancelBuy" class="px-4 py-2 bg-red-500 text-white rounded">BATAL</button>
				</div>
			</div>
		</div>

		<!-- Delivery Modal -->
		<div id="deliveryModal"
			class="modal hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
			<div class="modal-content bg-white p-4 rounded shadow-lg max-w-md h-auto mx-3">
				<p class="text-lg text-black font-semibold">Di tunggu ya,barang sedang diantar &#128516;</p>
				<div class="flex justify-end">
					<button id="closeDeliveryModal"
						class="px-4 py-2 bg-blue-500 text-white rounded mt-4 inline-block w-auto">OK</button>
				</div>
			</div>
		</div>

		<!-- Cancel Modal -->
		<div id="cancelModal"
			class="modal hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
			<div class="modal-content bg-white p-4 rounded shadow-lg max-w-md h-auto mx-3">
				<p class="text-lg text-black font-semibold">Transaksi dibatalkan &#128531;</p>
				<div class="flex justify-end">
					<button id="closeCancelModal"
						class="px-4 py-2 bg-blue-500 text-white rounded mt-4 inline-block w-auto">OK</button>
				</div>
			</div>
		</div>

		<!-- Grid Layout for Main Content -->
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 flex-grow">
			<!-- Left Section: Product Image, Title, and Carousel -->
			<div class="space-y-4">
				<!-- Product Title Container -->
				<div class=" rounded-md sm:block hidden" id="mainTitle">
					<h1 id="productTitle" class="text-3xl font-bold text-black text-center  border-black">
						{{ $details[0]->title }}
					</h1>
				</div>
				<!-- Main Product Image -->
				<div id="mainImage" class="w-full h-80 flex justify-center items-center rounded-md overflow-hidden">
					<img id="currentImage" src="{{$details[0]->image_path}}" alt="Product Image"
						class="zoomable-image object-cover h-full w-full transition-transform duration-300 ease-out bg-repeat bg-contain" />
				</div>
				<!-- small Thumbnails-->
				<div id="thumbnailContainer" class="flex flex-wrap gap-1 justify-between">
					${imagesContainer.join("")}
				</div>
			</div>

			<!-- Middle Section: Product Details -->
			<div class="space-y-4">
				<!-- Pricing and Rating Section -->
				<div class="text-black p-4 space-y-2 rounded-md">
					<p class="text-lg">
					<h1 id="productTitleInPricing" class="text-2xl font-bold text-black sm:hidden block ">
						{{ $details[0]->title }}
					</h1>
					<span id="discountedPrice" class="font-bold text-2xl">
						{{Illuminate\Support\Number::currency(discount($details[0]->price, $details[0]->discount), 'IDR', 'de')}}
					</span>
					<span id="soldTotal" class="font-light text-m">{{$details[0]->sold_total}}</span>
					</span>
					<br />
					<span id="originalPrice" class="line-through">
						{{Illuminate\Support\Number::currency($details[0]->price, 'IDR', 'de')}}</span>
					</p>
					<div id="productRating" class="flex items-center space-x-2">
						@for ($i = 1; $i <= 5; $i++)
							@if ($i <= $details[0]->rating)
								<x-bi-star-fill class="text-yellow-500" />
							@else
								<x-bi-star class="text-gray-400" />
							@endif
						@endfor
					</div>
					<p id="discountText" class="fw-bold">Diskon: {{$details[0]->discount}}%</p>
					<p id="productLocation" class="text-lg">
						<span class="fw-bold">Lokasi:</span>
						{{$details[0]->location}}
					</p>
				</div>

				<!-- Product Description -->
				<div class="text-black p-4 rounded-md shadow-md">
					<p id="productDescription">
						<span class="fw-bold  ">Deskripsi Produk:</span>
						<br />
						{{$details[0]->description}}

					</p>

				</div>
			</div>

			<!-- Right Section: Atur Jumlah dan Catatan -->
			<div class="bg-gray-100 text-black p-4 space-y-4 rounded-md shadow-md">
				<h3 class="text-lg font-semibold">Atur Jumlah dan Catatan</h3>
				<div>
					<label for="variantSelect">Varian Produk:</label>
					<select id="variantSelect" class="w-full p-2 bg-white border border-gray-300 rounded">
						${VariantsContainer.join("")}
					</select>
				</div>
				<div class="flex items-center my-3 flex-wrap space-x-2">
					<label>Quantity:</label>
					<div class="flex space-x-2 my-sm-0 my-3">
						<button class="px-3 py-2 bg-slate-700 text-white rounded" id="decreaseQtt">-</button>
						<input id="quantityInput" type="text" value="1"
							class="text-center w-10 bg-white border border-gray-300 rounded" readonly />
						<button class="px-3 py-2 bg-slate-700 text-white rounded" id="increaseQtt">+</button>
					</div>
					</span>
				</div>

				<!-- Pricing Section (with Dynamic Subtotal) -->
				<span id="stockCount" class="my-10"><span class="font-bold">Stok:</span> {{$details[0]->stock}}
					<div class="space-y-1">
						<p class="text-sm text-gray-500">Subtotal</p>
						<p class="text-lg font-semibold text-gray-900">
							<span id="subtotalPrice" class="text-xl">
								{{Illuminate\Support\Number::currency(discount($details[0]->price, $details[0]->discount), 'IDR', 'de')}}
							</span>
						</p>
					</div>

					<div>
						<label for="TransactionMethod">Metode Transaksi:</label>
						<select id="TransactionMethod" class="w-full p-2 bg-white border border-gray-300 rounded">
							<option>Cash on Delivery</option>
							<option>Delivery</option>
						</select>
					</div>

					<!-- Notes Section -->
					<div class="space-y-2">
						<label for="catatan" class="block text-gray-600">Catatan:</label>
						<textarea id="catatan" rows="6" class="w-full p-2 bg-white border border-gray-300 rounded"
							placeholder="Tambahkan catatan untuk pesanan Anda..."></textarea>
					</div>

					<!-- Buy Button -->
					<div class="space-y-2">
						<button class="w-full bg-slate-700 text-white py-2 rounded" id="BuyButton">Beli</button>
					</div>
			</div>
		</div>
	</div>
@endsection