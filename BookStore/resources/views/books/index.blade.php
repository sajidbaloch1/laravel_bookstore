@extends('layouts.layouts')
@section('title','Home')
    
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="{{ asset('assets/img/slider3.jpg') }}" style="width: 100%; height: 600px;" alt="...">
      </div>
      <div class="carousel-item active">
        <img src="{{ asset('assets/img/slider1.jpg') }}" style="width: 100%; height: 600px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/img/slider2.jpg') }}" style="width: 100%; height: 600px;" alt="...">
      </div>
    </div>
  </div>
  
  <!-- slider End -->
  <!-- Book Listing Start -->
  @foreach ($categories as $category)
  <h1 class="text-center fw-light border mt-5">{{$category->name}}</h1>
  <div class="container my-5">
    <div class="row">
      @foreach ($books as $book)
      @if ($category->id === $book->category->id)
      <div class="col-lg-3 text-center my-3">
        <a href="{{ route('book-detail', $book->id) }}">
            <div class="card">
        <div class="card-header">
          <h6> Name: {{ $book->name }}</h6>
        </div>
        <div class="card-body ps-5">
          <img src="{{$book->image }}" alt="">
        </div>
        <div class="card-footer">
          <p class="text-danger"> <span class="text-success fw-bold">Rs </span>{{ $book->price }} <br>
         <span class="text-dark fw-bold"> {{ $book->author->name }}</span></p>
         <input type="number" class="form-control my-2" name="quantity">
         <button class="btn btn-primary btn-sm">Add To Cart</button>
        </div>
      </div>
    </a>
    </div>
    @endif
    @endforeach
  </div>
</div>
@endforeach
  <!-- Book Listing End -->
  </section>
  
  <section class="section text-center my-5">
    <div class="container pt-5">
      <div class="row pt-5">
        <div class="col-lg-12 mt-5">
          <button class="btn btn-lg btn-dark mt-5">Testimonial</button>
          <p class="text-light mt-5">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, tempora rerum. Magnam quod natus atque iste aspernatur ratione culpa, placeat incidunt illum debitis consequatur asperiores accusamus dolorem explicabo consectetur similique cupiditate, nemo neque deserunt modi obcaecati iusto sed illo quasi. Minus unde tempora, repudiandae a dignissimos dolorum quae at dolore."</p>
        </div>
      </div>
    </div>
  </section>


  
  
  
  
  <section class="text-gray-400  body-font my-5">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="assets/img/author1.png">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
            <h2 class="text-dark font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
            <p class="text-gray-500">Armado Kilano</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="assets/img/author2.png">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
            <h2 class="text-dark font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
            <p class="text-gray-500">Ama Aipama</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:mb-0 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="assets/img/author3.png">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
            <h2 class="text-dark font-medium title-font tracking-wider text-sm">Ani Solahudin</h2>
            <p class="text-gray-500">CTO</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  
@endsection
