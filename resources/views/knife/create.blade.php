<x-app-layout>
    <main>
        <div class="container-small">
            <h1 class="page-title">Add New Knife</h1>
            <form action="{{ route('knife.store') }}" method="POST" enctype="multipart/form-data" class="card add-new-knife-form">
                @csrf
                <div class="form-content">
                    <div class="form-details">
                        <!-- 1 ▸ Maker / Collection -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="maker_id">Maker</label>
                                    <select name="maker_id" id="maker_id" required>
                                        <option value="">Choose maker</option>
                                        @foreach($makers as $maker)
                                            <option value="{{ $maker->id }}">{{ $maker->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="collection_id">Collection / Series</label>
                                    <select name="collection_id" id="collection_id">
                                        <option value="">Choose collection</option>
                                        @foreach($collections as $collection)
                                            <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- 2 ▸ Knife type / Material / Country -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="knife_type_id">Knife Type</label>
                                    <select name="knife_type_id" id="knife_type_id" required>
                                        <option value="">Choose type</option>
                                        @foreach($knifeTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="material_id">Steel / Material</label>
                                    <select name="material_id" id="material_id" required>
                                        <option value="">Choose material</option>
                                        @foreach($materials as $material)
                                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="country_id">Country</label>
                                    <select name="country_id" id="country_id" required>
                                        <option value="">Choose country</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- 3 ▸ Dimensions / weight / price -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="price">Price (₸)</label>
                                    <input type="number" name="price" id="price" placeholder="Price" required min="0" step="1000">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="full_length">Full Length (mm)</label>
                                    <input type="number" name="full_length" id="full_length" placeholder="Full length" required min="0">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="blade_length">Blade Length (mm)</label>
                                    <input type="number" name="blade_length" id="blade_length" placeholder="Blade length" required min="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="blade_width">Blade Width (mm)</label>
                                    <input type="number" name="blade_width" id="blade_width" placeholder="Blade width" min="0">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="butt_thickness">Butt Thickness (mm)</label>
                                    <input type="number" name="butt_thickness" id="butt_thickness" placeholder="Thickness at butt" min="0">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="weight">Weight (g)</label>
                                    <input type="number" name="weight" id="weight" placeholder="Weight" min="0">
                                </div>
                            </div>
                        </div>

                        <!-- 4 ▸ Description -->
                        <div class="form-group">
                            <label for="description">Detailed Description</label>
                            <textarea name="description" id="description" rows="8" placeholder="Describe this knife (steel treatment, handle material, history, etc.)"></textarea>
                        </div>

                        <!-- 5 ▸ Published -->
                        <div class="form-group inline">
                            <label class="checkbox">
                                <input type="checkbox" name="published" value="1"> Published
                            </label>
                        </div>
                    </div>

                    <!-- 6 ▸ Images -->
                    <div class="form-images">
                        <div class="form-image-upload">
                            <div class="upload-placeholder">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <input id="knifeImages" name="images[]" type="file" accept="image/*" multiple required />
                        </div>
                        <div id="imagePreviews" class="knife-form-images"></div>
                    </div>
                </div>

                <div class="p-medium" style="width: 100%">
                    <div class="flex justify-end gap-1">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
