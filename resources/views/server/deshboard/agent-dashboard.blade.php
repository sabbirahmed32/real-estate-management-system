@extends('server.layout.master')
@section('contain')
    <main class="app-wrapper">

      <div class="container-fluid">

        <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
          <div class="clearfix">
            <h1 class="app-page-title">Agent Dashboard</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="index.html" class="text-body">
                    <i class="fi fi-rr-home"></i>Home
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Agent</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">

          <div class="col-xxl-12">
            <div class="card card-body pt-4 pb-2 px-2">
              <div class="row">
                <div class="col-xxl-3 col-md-6 col-12 border-1 border-end mb-3">
                  <div class="card-body py-0 d-flex align-items-center justify-content-between">
                    <div class="clearfix">
                      <p class="mb-1">Monthly Income</p>
                      <h2 class="fw-bold mb-0 d-flex align-items-center gap-2">$36,329 <span class="badge badge-sm bg-success-subtle text-success">+12.1%</span>
                      </h2>
                    </div>
                    <div class="avatar avatar-lg rounded-4 bg-primary-subtle text-primary">
                      <i class="fi fi-rr-wallet"></i>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-12 border-1 border-end mb-3">
                  <div class="card-body py-0 d-flex align-items-center justify-content-between">
                    <div class="clearfix">
                      <p class="mb-1">Revenue Growth</p>
                      <h2 class="fw-bold mb-0 d-flex align-items-center gap-2">$84,638 <span class="badge badge-sm bg-success-subtle text-success">22.3%</span>
                      </h2>
                    </div>
                    <div class="avatar avatar-lg rounded-4 bg-secondary-subtle text-secondary">
                      <i class="fi fi-rr-growth-chart-invest"></i>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-12 border-1 border-end mb-3">
                  <div class="card-body py-0 d-flex align-items-center justify-content-between">
                    <div class="clearfix">
                      <p class="mb-1">Conversion Rate</p>
                      <h2 class="fw-bold mb-0">67.25%</h2>
                    </div>
                    <div class="avatar avatar-lg rounded-4 bg-success-subtle text-success">
                      <i class="fi fi-rr-sack-dollar"></i>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-12 mb-3">
                  <div class="card-body py-0 d-flex align-items-center justify-content-between">
                    <div class="clearfix">
                      <p class="mb-1">Net Profit Margin</p>
                      <h2 class="fw-bold mb-0">24.18%</h2>
                    </div>
                    <div class="avatar avatar-lg rounded-4 bg-info-subtle text-info">
                      <i class="fi fi-sr-chart-simple"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-6">
            <div class="card">
              <div class="card-header border-0 pb-0 d-flex align-items-center justify-content-between">
                <h6 class="card-title mb-0">Sales Performance</h6>
                <div class="dropdown d-flex align-items-center gap-2">
                  <button class="btn dropdown-toggle btn-white btn-shadow waves-effect btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Last Month
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Last Years</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pb-0 px-2">
                <div class="row mb-1">
                  <div class="col-sm-3 col-6 border-1 border-end">
                    <div class="px-3">
                      <span class="text-2xs d-block">Visitors</span>
                      <h4 class="mb-0 fw-bold">210.5k</h4>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6 border-1 border-end">
                    <div class="px-3">
                      <span class="text-2xs d-block">Views</span>
                      <h4 class="mb-0 fw-bold">425.3k</h4>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6 border-1 border-end">
                    <div class="px-3">
                      <span class="text-2xs d-block">Leads</span>
                      <h4 class="mb-0 fw-bold">78.3K</h4>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6">
                    <div class="px-3">
                      <span class="text-2xs d-block">Market</span>
                      <h4 class="mb-0 fw-bold">58.4k</h4>
                    </div>
                  </div>
                </div>
                <div id="RevenueChart2"></div>
              </div>
            </div>
          </div>

          <div class="col-xxl-6">
            <div class="card">
              <div class="card-header border-0 pb-0 d-flex align-items-center justify-content-between">
                <h6 class="card-title mb-0">Recent Agent Status</h6>
                <div class="dropdown d-flex align-items-center gap-2">
                  <button class="btn dropdown-toggle btn-white btn-shadow waves-effect btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Last Month
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Last Years</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pb-0 px-2">
                <div class="mb-2 d-flex align-items-center gap-2 px-3">
                  <h2 class="mb-0 fw-bold">$236,423</h2>
                  <span class="text-danger">-10.34%</span>
                </div>
                <div id="agentStatusChart"></div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-lg-6">
            <div class="card overflow-hidden">
              <div class="card-header border-0">
                <h6 class="card-title mb-0">Best Performing Agents</h6>
              </div>
              <div class="card-body gradient-layer pt-0" style="height: 325px;" data-simplebar>
                <ul class="list-group list-group-hover list-group-smooth list-group-space-sm">
                  <li class="list-group-item d-flex justify-content-between align-items-center position-relative">
                    <div class="avatar avatar-xl rounded-circle me-3">
                      <img src="{{asset('assets/images/avatar/avatar9.webp')}}" alt="">
                    </div>
                    <div class="clearfix me-auto pe-3">
                      <h5 class="mb-1 fw-bold">Ethan Brown</h5>
                      <p class="mb-2 text-body">
                        <i class="fi fi-rs-marker me-1"></i> Sydney, Australia
                      </p>
                      <div class="d-flex flex-wrap align-items-center gap-2 text-body mb-0">
                        <p class="mb-0 text-body">80 Sold</p>
                        <p class="mb-0 text-body">35 Rented</p>
                        <p class="mb-0 text-body">
                          <i class="fi fi-ss-star text-warning me-1"></i>Rating: (4.6)
                        </p>
                      </div>
                    </div>
                    <span class="position-absolute top-0 end-0 p-2">
                      <a href="agent-profile.html" class="btn btn-sm btn-icon btn-outline-light btn-action-primary">
                        <i class="fi fi-rr-arrow-small-right"></i>
                      </a>
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center position-relative">
                    <div class="avatar avatar-xl rounded-circle me-3">
                      <img src="{{asset('assets/images/avatar/avatar2.webp')}}" alt="">
                    </div>
                    <div class="clearfix me-auto pe-3">
                      <h5 class="mb-1 fw-bold">Sophia Williams</h5>
                      <p class="mb-2 text-body">
                        <i class="fi fi-rs-marker me-1"></i> Los Angeles, USA
                      </p>
                      <div class="d-flex flex-wrap align-items-center gap-2 text-body mb-0">
                        <p class="mb-0 text-body">40 Sold</p>
                        <p class="mb-0 text-body">20 Rented</p>
                        <p class="mb-0 text-body">
                          <i class="fi fi-ss-star text-warning me-1"></i>Rating: (4.4)
                        </p>
                      </div>
                    </div>
                    <span class="position-absolute top-0 end-0 p-2">
                      <a href="agent-profile.html" class="btn btn-sm btn-icon btn-outline-light btn-action-primary">
                        <i class="fi fi-rr-arrow-small-right"></i>
                      </a>
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center position-relative">
                    <div class="avatar avatar-xl rounded-circle me-3">
                      <img src="{{asset('assets/images/avatar/avatar3.webp')}}" alt="">
                    </div>
                    <div class="clearfix me-auto pe-3">
                      <h5 class="mb-1 fw-bold">Liam Johnson</h5>
                      <p class="mb-2 text-body">
                        <i class="fi fi-rs-marker me-1"></i> Toronto, Canada
                      </p>
                      <div class="d-flex flex-wrap align-items-center gap-2 text-body mb-0">
                        <p class="mb-0 text-body">65 Sold</p>
                        <p class="mb-0 text-body">21 Rented</p>
                        <p class="mb-0 text-body">
                          <i class="fi fi-ss-star text-warning me-1"></i>Rating: (3.8)
                        </p>
                      </div>
                    </div>
                    <span class="position-absolute top-0 end-0 p-2">
                      <a href="agent-profile.html" class="btn btn-sm btn-icon btn-outline-light btn-action-primary">
                        <i class="fi fi-rr-arrow-small-right"></i>
                      </a>
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center position-relative">
                    <div class="avatar avatar-xl rounded-circle me-3">
                      <img src="{{asset('assets/images/avatar/avatar4.webp')}}" alt="">
                    </div>
                    <div class="clearfix me-auto pe-3">
                      <h5 class="mb-1 fw-bold">Sophia Williams</h5>
                      <p class="mb-2 text-body">
                        <i class="fi fi-rs-marker me-1"></i> New York, USA
                      </p>
                      <div class="d-flex flex-wrap align-items-center gap-2 text-body mb-0">
                        <p class="mb-0 text-body">50 Sold</p>
                        <p class="mb-0 text-body">18 Rented</p>
                        <p class="mb-0 text-body">
                          <i class="fi fi-ss-star text-warning me-1"></i>Rating: (4.5)
                        </p>
                      </div>
                    </div>
                    <span class="position-absolute top-0 end-0 p-2">
                      <a href="agent-profile.html" class="btn btn-sm btn-icon btn-outline-light btn-action-primary">
                        <i class="fi fi-rr-arrow-small-right"></i>
                      </a>
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center position-relative">
                    <div class="avatar avatar-xl rounded-circle me-3">
                      <img src="{{asset('assets/images/avatar/avatar2.webp')}}" alt="">
                    </div>
                    <div class="clearfix me-auto pe-3">
                      <h5 class="mb-1 fw-bold">Sophia Williams</h5>
                      <p class="mb-2 text-body">
                        <i class="fi fi-rs-marker me-1"></i> Los Angeles, USA
                      </p>
                      <div class="d-flex flex-wrap align-items-center gap-2 text-body mb-0">
                        <p class="mb-0 text-body">40 Sold</p>
                        <p class="mb-0 text-body">20 Rented</p>
                        <p class="mb-0 text-body">
                          <i class="fi fi-ss-star text-warning me-1"></i>Rating: (4.4)
                        </p>
                      </div>
                    </div>
                    <span class="position-absolute top-0 end-0 p-2">
                      <a href="agent-profile.html" class="btn btn-sm btn-icon btn-outline-light btn-action-primary">
                        <i class="fi fi-rr-arrow-small-right"></i>
                      </a>
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center position-relative">
                    <div class="avatar avatar-xl rounded-circle me-3">
                      <img src="{{asset('assets/images/avatar/avatar3.webp')}}" alt="">
                    </div>
                    <div class="clearfix me-auto pe-3">
                      <h5 class="mb-1 fw-bold">Liam Johnson</h5>
                      <p class="mb-2 text-body">
                        <i class="fi fi-rs-marker me-1"></i> Toronto, Canada
                      </p>
                      <div class="d-flex flex-wrap align-items-center gap-2 text-body mb-0">
                        <p class="mb-0 text-body">65 Sold</p>
                        <p class="mb-0 text-body">21 Rented</p>
                        <p class="mb-0 text-body">
                          <i class="fi fi-ss-star text-warning me-1"></i>Rating: (3.8)
                        </p>
                      </div>
                    </div>
                    <span class="position-absolute top-0 end-0 p-2">
                      <a href="agent-profile.html" class="btn btn-sm btn-icon btn-outline-light btn-action-primary">
                        <i class="fi fi-rr-arrow-small-right"></i>
                      </a>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-lg-6">
            <div class="card overflow-hidden">
              <div class="card-header border-0">
                <h6 class="card-title mb-0">Meet Our New Agents</h6>
              </div>
              <div class="card-body gradient-layer pt-0" style="height: 325px;" data-simplebar>
                <ul class="list-group list-group-smooth list-group-space-sm">
                  <li class="list-group-item bg-light-subtle d-flex justify-content-between align-items-center">
                    <div class="avatar rounded-circle me-2">
                      <img src="{{asset('assets/images/avatar/avatar1.webp')}}" alt="">
                    </div>
                    <div class="me-auto">
                      <h6 class="mb-0">Emily Johnson</h6>
                      <small class="text-body">emily.johnson@gmail.com</small>
                    </div>
                    <div class="ms-2 ms-auto">
                      <small class="mb-0">27 Oct 2025</small>
                    </div>
                  </li>
                  <li class="list-group-item bg-light-subtle d-flex justify-content-between align-items-center">
                    <div class="avatar rounded-circle me-2">
                      <img src="{{asset('assets/images/avatar/avatar2.webp')}}" alt="">
                    </div>
                    <div class="me-auto">
                      <h6 class="mb-0">Michael Brown</h6>
                      <small class="text-body">michael.brown@example.com</small>
                    </div>
                    <div class="ms-2 ms-auto">
                      <small class="mb-0">28 Oct 2025</small>
                    </div>
                  </li>
                  <li class="list-group-item bg-light-subtle d-flex justify-content-between align-items-center">
                    <div class="avatar rounded-circle me-2">
                      <img src="{{asset('assets/images/avatar/avatar3.webp')}}" alt="">
                    </div>
                    <div class="me-auto">
                      <h6 class="mb-0">Sophia Williams</h6>
                      <small class="text-body">sophia.williams@example.com</small>
                    </div>
                    <div class="ms-2 ms-auto">
                      <small class="mb-0">29 Oct 2025</small>
                    </div>
                  </li>
                  <li class="list-group-item bg-light-subtle d-flex justify-content-between align-items-center">
                    <div class="avatar rounded-circle me-2">
                      <img src="{{asset('assets/images/avatar/avatar4.webp')}}" alt="">
                    </div>
                    <div class="me-auto">
                      <h6 class="mb-0">Liam Davis</h6>
                      <small class="text-body">liam.davis@example.com</small>
                    </div>
                    <div class="ms-2 ms-auto">
                      <small class="mb-0">30 Oct 2025</small>
                    </div>
                  </li>
                  <li class="list-group-item bg-light-subtle d-flex justify-content-between align-items-center">
                    <div class="avatar rounded-circle me-2">
                      <img src="{{asset('assets/images/avatar/avatar5.webp')}}" alt="">
                    </div>
                    <div class="me-auto">
                      <h6 class="mb-0">Olivia Martinez</h6>
                      <small class="text-body">olivia.martinez@example.com</small>
                    </div>
                    <div class="ms-2 ms-auto">
                      <small class="mb-0">31 Oct 2025</small>
                    </div>
                  </li>
                  <li class="list-group-item bg-light-subtle d-flex justify-content-between align-items-center">
                    <div class="avatar rounded-circle me-2">
                      <img src="assets/images/avatar/avatar2.webp" alt="">
                    </div>
                    <div class="me-auto">
                      <h6 class="mb-0">Michael Brown</h6>
                      <small class="text-body">michael.brown@example.com</small>
                    </div>
                    <div class="ms-2 ms-auto">
                      <small class="mb-0">28 Oct 2025</small>
                    </div>
                  </li>
                  <li class="list-group-item bg-light-subtle d-flex justify-content-between align-items-center">
                    <div class="avatar rounded-circle me-2">
                      <img src="{{asset('assets/images/avatar/avatar4.webp')}}" alt="">
                    </div>
                    <div class="me-auto">
                      <h6 class="mb-0">Liam Davis</h6>
                      <small class="text-body">liam.davis@example.com</small>
                    </div>
                    <div class="ms-2 ms-auto">
                      <small class="mb-0">30 Oct 2025</small>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xxl-4">
            <div class="row">
              <div class="col-xxl-12 col-lg-6">
                <div class="card text-bg-primary">
                  <div class="card-header pb-0 border-0 d-flex align-items-center justify-content-between">
                    <h6 class="card-title text-white mb-0">Total Rent Collected</h6>
                    <div class="dropdown d-flex align-items-center gap-2">
                      <button class="btn dropdown-toggle btn-light btn-shadow btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Monthly
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Today</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0"></div>
                  <div class="card-footer border-0">
                    <div class="d-flex align-items-end justify-content-between mb-3">
                      <div class="clearfix">
                        <small>Total Income</small>
                        <h3 class="text-white mb-0">$750.00K</h3>
                      </div>
                      <div class="clearfix text-end">
                        <small>Target Achieved</small>
                        <h3 class="text-white mb-0">77%</h3>
                      </div>
                    </div>
                    <div class="progress mb-0" role="progressbar" aria-label="Success striped example" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                      <div class="progress-bar progress-bar-striped bg-success" style="width: 77%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-12 col-lg-6">
                <div class="card">
                  <div class="card-header pb-0 border-0 d-flex align-items-center justify-content-between">
                    <h6 class="card-title mb-0">Total Revenue</h6>
                    <div class="dropdown d-flex align-items-center gap-2">
                      <button class="btn dropdown-toggle btn-white btn-shadow btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Monthly
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Today</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body d-sm-flex gap-4">
                    <div class="maxw-200px ratio ratio-1x1 mx-auto mb-3">
                      <canvas id="ApplicantTypeChart"></canvas>
                    </div>
                    <ul class="list-group list-group-flush pt-2 list-group-space-sm w-100">
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <div class="d-flex align-items-center">
                          <i class="fi fi-rr-dot-circle text-primary me-2"></i>
                          <h6 class="mb-0">Rent</h6>
                        </div>
                        <div class="clearfix text-end">
                          <h6 class="mb-0">$26,350</h6>
                        </div>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <div class="d-flex align-items-center">
                          <i class="fi fi-rr-dot-circle text-primary me-2"></i>
                          <h6 class="mb-0">Sales</h6>
                        </div>
                        <div class="clearfix text-end">
                          <h6 class="mb-0">$12,654</h6>
                        </div>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <div class="d-flex align-items-center">
                          <i class="fi fi-rr-dot-circle text-primary me-2"></i>
                          <h6 class="mb-0">Broker Deal</h6>
                        </div>
                        <div class="clearfix text-end">
                          <h6 class="mb-0">$8,000</h6>
                        </div>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <div class="d-flex align-items-center">
                          <i class="fi fi-rr-dot-circle text-primary me-2"></i>
                          <h6 class="mb-0">Market</h6>
                        </div>
                        <div class="clearfix text-end">
                          <h6 class="mb-0">$7,268</h6>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-12">
            <div class="card overflow-hidden">
              <div class="card-header d-flex flex-wrap gap-3 border-0 pb-2 align-items-center justify-content-between">
                <h6 class="card-title mb-0">Property Listings</h6>
                <div id="dt_PropertyListing_Search"></div>
              </div>
              <div class="card-body p-0 pb-2">
                <table id="dt_PropertyListing" class="table">
                  <thead class="table-light">
                    <tr>
                      <th class="minw-200px">Property</th>
                      <th class="minw-150px">Type</th>
                      <th class="minw-150px">Location</th>
                      <th class="minw-150px">Price</th>
                      <th class="minw-150px">Views</th>
                      <th class="minw-150px">Status</th>
                      <th class="minw-100px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-primary me-2">
                            <img src="{{asset('assets/images/properties/listing/pic1.jpg')}}" alt="">
                          </div>
                          Skyline Villa
                        </div>
                      </td>
                      <td>Villa</td>
                      <td>Dubai, UAE</td>
                      <td>$1,45,752</td>
                      <td>1,230</td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light">
                            <i class="fi fi-rr-edit"></i>
                          </button>
                          <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light">
                            <i class="fi fi-rr-eye"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                   
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-primary me-2">
                            <img src="assets/images/properties/listing/pic13.jpg" alt="">
                          </div>
                          Highland Cottage
                        </div>
                      </td>
                      <td>Cottage</td>
                      <td>Scotland, UK</td>
                      <td>$72,900</td>
                      <td>1,050</td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light">
                            <i class="fi fi-rr-edit"></i>
                          </button>
                          <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light">
                            <i class="fi fi-rr-eye"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>

    </main>

    @endsection
