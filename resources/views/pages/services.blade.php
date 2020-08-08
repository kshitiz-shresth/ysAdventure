@extends('layouts.myapp')


@section('body')
@include('include.page_header',[
    'title'=>'Services'
])

@foreach ($services as $item)
 <section class="section pt-5 {{ $loop->last ? '':'pb-0'  }} about-2 position-relative">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-10 text-center">
                <h1 >{{ $item->title }}</h1>
                    <img src="{{ Voyager::image($item->image) }}" alt="" class="img-fluid mb-2">
				{!! $item->description !!}
			</div>
		</div>
	</div>
</section>   
@endforeach

@endsection