<x-app-layout title="Главная страница">
  @section('content')
<!-- Home Slider -->
    <section class="hero-slider">
<!-- /Home Slider -->
<main>
    <x-search-form />
      <!-- New knives -->
      <section>
        <div class="container">
          <h2>Все ножи</h2>
          <div class="knife-items-listing">
            @foreach($knifes as $knife)
              <x-knife-item: $knife/>
            @endforeach
          </div>
        </div>
      </section>
      <!--/ New knives -->
    </main>
</x-app-layout>