<!-- Find a knife form -->
<section class="find-a-knife">
  <div class="container">
    <form
      action="{{ route('knife.search', '$knife') }}"
      method="GET"
      class="find-a-knife-form card flex p-medium"
    >
      <div class="find-a-knife-inputs">

        <!-- Maker -->
        <div>
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

        <!-- Collection (dependent on Maker) -->
        <div>
          <select id="collectionSelect" name="collection_id">
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

        <!-- Остальные поля (knife type, material, price) — как раньше -->
        <!-- ... -->

      </div>

      <!-- Кнопки -->
      <div>
        <button type="button" class="btn btn-find-a-knife-reset">Reset</button>
        <button class="btn btn-primary btn-find-a-knife-submit">Search</button>
      </div>
    </form>
  </div>
</section>

<!-- JavaScript для зависимости -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const makerSelect = document.getElementById('makerSelect');
    const collectionSelect = document.getElementById('collectionSelect');
    const collectionOptions = Array.from(collectionSelect.options).slice(1); // exclude first "Collection" option

    function filterCollections() {
      const selectedMakerId = makerSelect.value;

      // Always keep the first option
      collectionSelect.innerHTML = '<option value="">Collection</option>';

      collectionOptions.forEach(option => {
        if (option.dataset.parent === selectedMakerId) {
          collectionSelect.appendChild(option);
        }
      });
    }

    makerSelect.addEventListener('change', filterCollections);
  });
</script>
