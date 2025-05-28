<x-app-layout>
    <main>
      <!-- New Knives -->
      <section>
        <div class="container">
          <div class="flex justify-between items-center"> 
            <h2> My Favourite Knives </h2>
            @if ($knifes->total()>0)
              <div class="pagination-summary">
                <p> Showing {{$knifes->firstItem()}} to
                  {{$knifes->lastItem()}} of {{$knifes->total()}} results
              </div>
            @endif
          </div>
          <div clas= "knife-items-listing">
            @foreach ($knifes as $knife)
                <x-knife-item :knife="$knife" :isInWatchList="true" />
            @endforeach
          </div>

          {{$knifes->onEachSide(1)->links()}}
        </div>
      </section>
      <!--/ New Knives-->
    </main>
</x-app-layout>