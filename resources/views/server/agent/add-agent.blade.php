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

        <div class="row">

          <div class="col-xxl-3 col-lg-3">
            <div class="card h-auto">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title mb-0">Upload Property Photo</h6>
              </div>
              <div class="card-body">
                <div class="text-center mb-2 border-1 border-dashed rounded-2 py-5">
                  <img width="100" src="assets/images/icons/picture.png" alt="Upload">
                </div>
                <p class="text-2xs">1600 x 1200 (4:3) recommended. PNG, JPG, GIF allowed.</p>
                <div class="text-center pt-2">
                  <form>
                    <input type="file" id="propertyImage" class="form-control visually-hidden">
                    <label for="propertyImage" class="btn btn-outline-light waves-effect d-block">Upload Image</label>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-9 col-lg-9">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title pb-0">Add Agent</h6>
              </div>
              <div class="card-body">
                <form class="row">
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Agent Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Agent Email</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Agent Number</label>
                    <input type="number" class="form-control" placeholder="+12 9876543210">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Properties Number</label>
                    <input type="number" class="form-control" placeholder="Properties Number">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Gender</label>
                    <select class="form-select" data-gtm-form-interact-field-id="0">
                      <option>Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Property Status</label>
                    <select class="form-select" data-gtm-form-interact-field-id="0">
                      <option>For Sale</option>
                      <option>For Rent</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Property Price</label>
                    <input type="text" class="form-control" placeholder="$35000">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Max Rooms</label>
                    <select class="form-select" data-gtm-form-interact-field-id="0">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Beds</label>
                    <select class="form-select" data-gtm-form-interact-field-id="0">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Baths</label>
                    <select class="form-select" data-gtm-form-interact-field-id="0">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Street Address</label>
                    <input type="text" class="form-control" placeholder="Street Address">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">State</label>
                    <input type="text" class="form-control" placeholder="State">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Country</label>
                    <input type="text" class="form-control" placeholder="Country">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">City</label>
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label mb-2">Zip Code</label>
                    <input type="number" class="form-control" placeholder="Zip Code">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label class="form-label mb-2">Address</label>
                    <textarea class="form-control" rows="8" placeholder="Enter address"></textarea>
                  </div>
                  <div class="col-md-12 mt-3">
                    <button type="reset" class="btn btn-light">Cancel</button>
                    <button type="submit" class="btn btn-primary ms-2">Submit</button>
                  </div>
              </div>
              </form>
            </div>
          </div>

        </div>
      </div>

    </main>

   @endsection
