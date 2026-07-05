@extends('server.layout.master')
@section('contain')
    <main class="app-wrapper">

        <div class="container-fluid">

            <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                <div class="clearfix">
                    <h1 class="app-page-title mb-0">Add Agent</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html" class="text-body">
                                    <i class="fi fi-rr-home"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Agent</li>
                        </ol>
                    </nav>
                </div>
                <button type="button" class="btn btn-primary">
                    Save Agent
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row">

                    <div class="col-xxl-3 col-md-3 col-lg-3">
                        <div class="card h-auto">
                            <div class="card-header border-0 pb-0">
                                <h6 class="card-title mb-0">Upload Property Images</h6>
                            </div>

                            <div class="card-body">

                                <div class="border rounded p-3 text-center mb-3">

                                    <div id="previewContainer" class="row g-2">

                                        <div class="col-12">
                                            <img src="{{ asset('assets/images/icons/picture.png') }}" id="defaultImage"
                                                class="img-fluid" style="max-height:120px;">
                                        </div>

                                    </div>

                                </div>

                                <small class="text-muted">
                                    JPG, PNG, WEBP (Multiple Images)
                                </small>

                                <input type="file" id="propertyImages" name="images[]" class="d-none" accept="image/*"
                                    multiple>

                                <label for="propertyImages" class="btn btn-success w-100 mt-3">
                                    Upload Images
                                </label>

                            </div>
                        </div>

                    </div>

                    <div class="col-xxl-9 col-md-9 col-lg-9">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h6 class="card-title pb-0">Add Agent</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label mb-2">Property Title</label>
                                        <input type="text" id="property_title" name="title" class="form-control"
                                            placeholder="Enter Property Title">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label mb-2">Property Slug</label>
                                        <input type="text" id="property_slug" name="slug" class="form-control"
                                            placeholder="Property Slug" readonly>
                                    </div>
                                    <!-- Agent -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Agent</label>
                                        <select name="agent_id" class="form-select">
                                            <option value="">Select Agent</option>

                                            @foreach ($agents as $agent)
                                                <option value="{{ $agent->id }}">
                                                    {{ $agent->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <!-- Property Type -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Property Type</label>
                                        <select name="property_type" class="form-select">
                                            <option value="">Select Type</option>
                                            <option value="House">House</option>
                                            <option value="Apartment">Apartment</option>
                                            <option value="Villa">Villa</option>
                                            <option value="Office">Office</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Land">Land</option>
                                            <option value="Townhouse">Townhouse</option>
                                            <option value="Penthouse">Penthouse</option>
                                        </select>
                                    </div>

                                    <!-- Property Status -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Property Status</label>
                                        <select name="property_status" class="form-select">
                                            <option value="">Select Status</option>
                                            <option value="For Sale">For Sale</option>
                                            <option value="For Rent">For Rent</option>
                                            <option value="Sold">Sold</option>
                                            <option value="Rented">Rented</option>
                                            <option value="Upcoming">Upcoming</option>
                                        </select>
                                    </div>

                                    <!-- Property Price -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Property Price ($)</label>
                                        <input type="number" name="price" class="form-control"
                                            placeholder="Enter Property Price">
                                    </div>

                                    <!-- Security Deposit -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Security Deposit ($)</label>
                                        <input type="number" name="security_deposit" class="form-control"
                                            placeholder="Enter Security Deposit">
                                    </div>

                                    <!-- Available From -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Available From</label>
                                        <input type="date" name="available_from" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Bed Rooms</label>
                                        <select name="max_rooms" class="form-select">
                                            <option value="">Select Rooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Bath Rooms</label>
                                        <select name="beds" class="form-select" data-gtm-form-interact-field-id="0">
                                            <option>Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Floor</label>
                                        <select name="baths" class="form-select" data-gtm-form-interact-field-id="0">
                                            <option>Select Baths</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <!-- Area (Sq Ft) -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Area (Sq Ft)</label>
                                        <div class="input-group">
                                            <input type="number" name="area" class="form-control"
                                                placeholder="Enter Area">
                                            <span class="input-group-text">Sq Ft</span>
                                        </div>
                                    </div>

                                    <!-- Parking -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Parking</label>
                                        <select name="parking" class="form-select">
                                            <option value="">Select Parking</option>
                                            <option value="0">No Parking</option>
                                            <option value="1">1 Car</option>
                                            <option value="2">2 Cars</option>
                                            <option value="3">3 Cars</option>
                                            <option value="4">4 Cars</option>
                                            <option value="5+">5+ Cars</option>
                                        </select>
                                    </div>

                                    <!-- Garage -->
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Garage</label>
                                        <select name="garage" class="form-select">
                                            <option value="">Select Garage</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Street Address</label>
                                        <input type="text" name="street_address" class="form-control"
                                            placeholder="Street Address">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">State</label>
                                        <input type="text" name="state" class="form-control" placeholder="State">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Country</label>
                                        <input type="text" name="country" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">City</label>
                                        <input type="text" name="city" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Zip Code</label>
                                        <input type="number" name="zip_code" class="form-control"
                                            placeholder="Zip Code">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label mb-2">Address</label>
                                        <textarea class="form-control" name="address" rows="8" placeholder="Enter address"></textarea>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Interior Features</h5>
                                            </div>

                                            <div class="card-body">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="interior_features[]" value="Floor-to-ceiling windows"
                                                        id="feature1">
                                                    <label class="form-check-label" for="feature1">Floor-to-ceiling
                                                        Windows</label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="interior_features[]" value="Hardwood flooring"
                                                        id="feature2">
                                                    <label class="form-check-label" for="feature2">Hardwood
                                                        Flooring</label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="interior_features[]" value="Gourmet kitchen"
                                                        id="feature3">
                                                    <label class="form-check-label" for="feature3">Gourmet Kitchen</label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="interior_features[]" value="In-unit washer/dryer"
                                                        id="feature4">
                                                    <label class="form-check-label" for="feature4">In-unit
                                                        Washer/Dryer</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="interior_features[]" value="Walk-in closets"
                                                        id="feature5">
                                                    <label class="form-check-label" for="feature5">Walk-in Closets</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Building Amenities</h5>
                                            </div>

                                            <div class="card-body">

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="amenities[]"
                                                        value="Rooftop terrace" id="amenity1">
                                                    <label class="form-check-label" for="amenity1">Rooftop
                                                        Terrace</label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="amenities[]"
                                                        value="Fitness center" id="amenity2">
                                                    <label class="form-check-label" for="amenity2">Fitness
                                                        Center</label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="amenities[]"
                                                        value="24/7 concierge" id="amenity3">
                                                    <label class="form-check-label" for="amenity3">24/7
                                                        Concierge</label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="amenities[]"
                                                        value="Indoor pool" id="amenity4">
                                                    <label class="form-check-label" for="amenity4">Indoor
                                                        Pool</label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="amenities[]"
                                                        value="Pet-friendly" id="amenity5">
                                                    <label class="form-check-label" for="amenity5">Pet
                                                        Friendly</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                        <button type="submit" class="btn btn-primary ms-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        </form>





        </div>
        </div>

    </main>





    <script>
        document.getElementById('property_title').addEventListener('keyup', function() {

            let slug = this.value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                .replace(/\s+/g, '-') // Replace spaces with -
                .replace(/-+/g, '-'); // Remove duplicate -

            document.getElementById('property_slug').value = slug;

        });
    </script>
    {{-- Image uplod --}}
    <script>
        const input = document.getElementById('propertyImages');
        const previewContainer = document.getElementById('previewContainer');

        input.addEventListener('change', function() {

            previewContainer.innerHTML = "";

            Array.from(this.files).forEach(file => {

                const reader = new FileReader();

                reader.onload = function(e) {

                    const col = document.createElement('div');

                    col.className = "col-6";

                    col.innerHTML = `
                <div class="position-relative">

                    <img src="${e.target.result}"
                         class="img-fluid rounded border"
                         style="height:100px;width:100%;object-fit:cover;">

                </div>
            `;

                    previewContainer.appendChild(col);

                }

                reader.readAsDataURL(file);

            });

        });
    </script>
@endsection
