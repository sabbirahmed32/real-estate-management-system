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
            <form action="{{ route('store.agents') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xxl-3 col-md-3 col-lg-3">
                        <div class="card h-auto">
                            <div class="card-header border-0 pb-0">
                                <h6 class="card-title mb-0">Upload Property Photo</h6>
                            </div>

                            <div class="card-body">
                                <div class="text-center mb-2 border-1 border-dashed rounded-2 py-5">
                                    <img id="previewImage" width="100" src="assets/images/icons/picture.png"
                                        alt="Upload">
                                </div>

                                <p class="text-2xs">
                                    1600 x 1200 (4:3) recommended. PNG, JPG, GIF allowed.
                                </p>

                                <div class="text-center pt-2">
                                    <input type="file" name="image" id="propertyImage"
                                        class="form-control visually-hidden" accept="image/*">

                                    <label for="propertyImage" class="btn btn-outline-light waves-effect d-block">
                                        Upload Image
                                    </label>
                                </div>
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
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Agent Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Full Name">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <select name="agents_type" class="form-control">
                                        <option value="Senior Agent">Senior Agent</option>
                                        <option value="Junior Agent">Junior Agent</option>
                                    </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Agent Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Agent Number</label>
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="+12 9876543210">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Properties Number</label>
                                        <input type="number" name="properties_number" class="form-control"
                                            placeholder="Properties Number">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Gender</label>
                                        <select name="gender" class="form-select">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Property Status</label>
                                        <select name="property_status" class="form-select">
                                            <option value="">Select Status</option>
                                            <option value="For Sale">For Sale</option>
                                            <option value="For Rent">For Rent</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Property Price</label>
                                        <input type="text" name="property_price" class="form-control"
                                            placeholder="$35000">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label mb-2">Max Rooms</label>
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
                                        <label class="form-label mb-2">Beds</label>
                                        <select name="beds" class="form-select" data-gtm-form-interact-field-id="0">
                                            <option>Select Beds</option>
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
                                        <label class="form-label mb-2">Baths</label>
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
                                    <div class="col-md-12 mt-3">
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                        <button type="submit" class="btn btn-primary ms-2">Submit</button>
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
        document.getElementById('propertyImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {

                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('previewImage').src =
                        event.target.result;
                    document.getElementById('previewImage').style.width = '100%';
                    document.getElementById('previewImage').style.maxHeight = '250px';
                    document.getElementById('previewImage').style.objectFit = 'cover';
                }

                reader.readAsDataURL(file);
            }

        });
    </script>
@endsection
