<x-app-layout title="Главная страница">
  @section('content')
<!-- Home Slider -->
    <section class="hero-slider">
<!-- /Home Slider -->
<main>
    <x-search-form />
      <!-- New Cars -->
      <section>
        <div class="container">
          <h2>Latest Added Cars</h2>
          <div class="car-items-listing">
            @for($i=0; $i < 15; $i++)
              <x-knife-item/>
            @endfor
          </div>
        </div>
      </section>
      <!--/ New Cars -->
    </main>
</x-app-layout>