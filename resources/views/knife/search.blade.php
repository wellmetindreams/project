<x-app-layout>
  <main>
    <!-- Found Knifes -->
    <section>
      <div class="container">
        <div class="sm:flex items-center justify-between mb-medium">
          <div class="flex items-center">
            <button class="show-filters-button flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" style="width: 20px">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
              </svg>
              Filters
            </button>
            <h2>Define your search criteria</h2>
          </div>

          <select class="sort-dropdown">
            <option value="">Order By</option>
            <option value="price">Price Asc</option>
            <option value="-price">Price Desc</option>
          </select>
        </div>
        <div class="search-knife-results-wrapper">
          <div class="search-knives-sidebar">
            <div class="card card-found-knives">
              <p class="m-0">Found <strong>{{ $knifes->total() }}</strong> knives</p>

              <button class="close-filters-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 24px">
                  <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>

            <!-- Find a knife form -->
            <section class="find-a-knife">
              <form action="/s.html" method="GET" class="find-a-knife-form knife flex p-medium">
                <div class="find-a-knife-inputs">
                  <div class="form-group">
                    <label class="mb-medium">Maker</label>
                    <select id="makerSelect" name="maker_id">
                      <option value="">Maker</option>
                      <option value="1">Chris Reeve</option>
                      <option value="2">Benchmade</option>
                      <option value="3">Spyderco</option>
                      <option value="4">Zero Tolerance</option>
                      <option value="5">Buck Knives</option>
                      <option value="6">Messermeister</option>
                      <option value="7">Bark River</option>
                      <option value="8">ESEE Knives</option>
                      <option value="9">Cold Steel</option>
                      <option value="10">Hogue Knives</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="mb-medium">Model</label>
                    <select id="modelSelect" name="model_id">
                      <option value="" style="display: block">Model</option>
                      <option value="">Collection</option>
                      <option value="1" data-parent="1">Sebenza Series</option>
                      <option value="2" data-parent="1">Inkosi Series</option>
                      <option value="3" data-parent="2">Griptilian Series</option>
                      <option value="4" data-parent="2">Bugout Series</option>
                      <option value="5" data-parent="3">Paramilitary Series</option>
                      <option value="6" data-parent="3">Delica Series</option>
                      <option value="7" data-parent="4">ZT 0900 Series</option>
                      <option value="8" data-parent="4">ZT 0450 Series</option>
                      <option value="9" data-parent="5">110 Folding Hunter</option>
                      <option value="10" data-parent="5">Vantage Series</option>
                      <option value="11" data-parent="6">San Moritz Series</option>
                      <option value="12" data-parent="6">Paladin Series</option>
                      <option value="13" data-parent="7">Bravo Series</option>
                      <option value="14" data-parent="7">Northstar Series</option>
                      <option value="15" data-parent="8">ESEE-5 Series</option>
                      <option value="16" data-parent="8">ESEE-6 Series</option>
                      <option value="17" data-parent="9">Recon Scout</option>
                      <option value="18" data-parent="9">SRK Series</option>
                      <option value="19" data-parent="10">EX-A01 Series</option>
                      <option value="20" data-parent="10">EX-F01 Series</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="mb-medium">Material Type</label>
                    <select name="knife_type_id">
                      <option value="">Type</option>
                      <option value="2">CPM-S35VN</option>
                      <option value="6">D2</option>
                      <option value="5">M390</option>
                      <option value="4">154CM</option>
                      <option value="3">440</option>
                      <option value="1">CPM-S30V</option>
                      <option value="1">CPM-20CV</option>
                      <option value="1">1095</option>
                      <option value="1">N690</option>
                      <option value="1">Elmax</option>
                      <option value="1">VG-10</option>
                      <option value="1">AUS-8</option>
                      <option value="1">Damascus Steel</option>
                      <option value="1">Tool Steel O1</option>
                      <option value="1">CPM-3V</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="mb-medium">Price</label>
                    <div class="flex gap-1">
                      <input type="number" placeholder="Price From" name="price_from" />
                      <input type="number" placeholder="Price To" name="price_to" />
                    </div>
                  </div>
                </div>
                <div class="flex">
                  <button type="button" class="btn btn-find-a-knife-reset">
                    Reset
                  </button>
                  <button class="btn btn-primary btn-find-a-knife-submit">
                    Search
                  </button>
                </div>
              </form>
            </section>
            <!--/ Find a knife form -->
          </div>

          <div class="search-knife-results">
            <div class="knife-items-listing">
              @foreach ($knifes as $knife)
                <x-knife-item :knife="$knife" />
              @endforeach
            </div>
            {{ $knifes->onEachSide(1)->links() }}
          </div>
        </div>
      </div>
    </section>
    <!--/ Found Knifes -->
  </main>
</x-app-layout>