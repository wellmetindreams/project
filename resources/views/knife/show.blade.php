<x-app-layout>
<main>
      <div class="container">
        <h1 class="knife-details-page-title">{{ $knife->maker->name }}
          {{ $knife->knifeType->name }} - {{ $knife->collection->name }}
        </h1>

        <div class="knife-details-content">
          <div class="knife-images-and-description">
            <div class="knife-images-carousel">
              <div class="knife-image-wrapper">
                <img
                  src="{{ $knife->primaryImage->image_path }}"
                  alt=""
                  class="knife-active-image"
                  id="activeImage"
                />
              </div>
              <div class="knife-image-thumbnails">
                @foreach ($knife->images as $image)
                  <img src="{{ $image->image_path }}" alt="" />
                @endforeach
              </div>
              <button class="carousel-button prev-button" id="prevButton">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  style="width: 64px"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 19.5 8.25 12l7.5-7.5"
                  />
                </svg>
              </button>
              <button class="carousel-button next-button" id="nextButton">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  style="width: 64px"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m8.25 4.5 7.5 7.5-7.5 7.5"
                  />
                </svg>
              </button>
            </div>

            <div class="card knife-detailed-description">
              <h2 class="knife-details-title">Detailed Description</h2>
              {!! $knife->description !!}
            </div>
          </div>
          <div class="knife-details card">
            <div class="flex items-center justify-between">
              <p class="knife-details-price">{{ $knife->price }}</p>
              <button class="btn-heart">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  style="width: 20px"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                  />
                </svg>
              </button>
            </div>

            <hr />
            <table class="knife-details-table">
              <tbody>
                <tr>
                  <th>Maker</th>
                  <td>{{ $knife->maker->name }}</td>
                </tr>
                <tr>
                  <th>Collection</th>
                  <td>{{ $knife->collection->name }}</td>
                </tr>
                <tr>
                  <th>Knife Type</th>
                  <td>{{ $knife->knifeType->name }}</td>
                </tr>
                <tr>
                  <th>Knife Material</th>
                  <td>{{ $knife->material->name }}</td>
                </tr>
              </tbody>
            </table>
            <hr />

            <div class="flex gap-1 my-medium">
              <img
                src="/img/avatar.png"
                alt=""
                class="knife-details-owner-image"
              />
            </div>
          </div>
        </div>
      </div>
    </main>
</x-app-layout>