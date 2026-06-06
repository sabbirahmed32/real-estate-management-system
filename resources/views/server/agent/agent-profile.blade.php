@extends('server.layout.master')
@section('contain')
    <main class="app-wrapper">

      <div class="container-fluid">

        <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
          <div class="clearfix">
            <h1 class="app-page-title mb-0">Agent Profile</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="index.html" class="text-body">
                    <i class="fi fi-rr-home"></i>Home
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Agent Profile</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="col-xxl-8">
            <div class="row">

              <div class="col-xxl-4 col-lg-5">
                <div class="card">
                  <div class="card-body p-2">
                    <img src="assets/images/avatar/agents/agent1.webp" alt="" class="w-100 rounded mb-3">
                    <div class="clearfix px-2">
                      <h5 class="mb-0">John Carter</h5>
                      <small class="mb-2 d-block">Senior Agent</small>
                      <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                        <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 32</span>
                        <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 18</span>
                        <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.8)</span>
                      </div>
                      <p class="d-flex align-items-center mb-1">
                        <i class="fi fi-rr-envelope me-2"></i>john.carter@example.com
                      </p>
                      <p class="d-flex align-items-center mb-1">
                        <i class="fi fi-rr-phone-call me-2"></i>+1 234 567 890
                      </p>

                      <div class="d-flex flex-wrap gap-2 mt-4">
                        <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-facebook waves-effect waves-light">
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-instagram waves-effect waves-light">
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-linkedin waves-effect waves-light">
                          <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-twitter waves-effect waves-light">
                          <i class="fa-brands fa-x-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-3 border-0 d-flex">
                    <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
                  </div>
                </div>
              </div>

              <div class="col-xxl-8 col-lg-7">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row g-2">
                          <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="d-flex align-items-center gap-2 mb-3">
                              <div class="avatar avatar-sm bg-primary bg-opacity-10 text-primary rounded-circle">
                                <i class="fi fi-rs-sack-dollar"></i>
                              </div>
                              <h6 class="mb-0">Revenue</h6>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                              <h3 class="text-dark fw-semibold mb-0">$72.2K</h3>
                              <span class="badge badge-sm bg-success-subtle text-success">+12.4%</p>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="d-flex align-items-center gap-2 mb-3">
                              <div class="avatar avatar-sm bg-secondary bg-opacity-10 text-secondary rounded-circle">
                                <i class="fi fi-rr-user"></i>
                              </div>
                              <h6 class="mb-0">Agents</h6>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                              <h3 class="text-dark fw-semibold mb-0">4201</h3>
                              <span class="badge badge-sm bg-success-subtle text-success">+4.1%</p>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="d-flex align-items-center gap-2 mb-3">
                              <div class="avatar avatar-sm bg-info bg-opacity-10 text-info rounded-circle">
                                <i class="fi fi-rr-document"></i>
                              </div>
                              <h6 class="mb-0">Bills</h6>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                              <h3 class="text-dark fw-semibold mb-0">2832</h3>
                              <span class="badge badge-sm bg-danger-subtle text-danger">-2.1%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="position-relative ms-3 mb-5">
                          <hr class="position-absolute start-0 top-0 h-100 border-1 border-dashed border-body">
                          <div class="position-relative ps-4 mb-4">
                            <div class="position-absolute start-0 avatar avatar-xs bg-primary-subtle rounded-circle text-primary translate-middle-x">
                              <i class="fi fi-rs-check-circle"></i>
                            </div>
                            <div class="ms-2 pt-2">
                              <h6 class="card-title mb-2">Description</h6>
                              <p>John Carter is a highly experienced <strong>Senior Real Estate Agent</strong> specializing in premium residential and commercial properties. With over 5 years in the real estate industry, he has built a reputation for delivering exceptional client service, smart investment advice, and smooth property transactions.</p>
                            </div>
                          </div>
                          <div class="position-relative ps-4">
                            <div class="position-absolute start-0 avatar avatar-xs bg-primary-subtle rounded-circle text-primary translate-middle-x">
                              <i class="fi fi-rs-check-circle"></i>
                            </div>
                            <div class="ms-2 pt-2">
                              <h6 class="card-title mb-2">Expertise & Highlights</h6>
                              <ul class="mb-0 ps-4">
                                <li>Expertise in luxury and commercial property sales.</li>
                                <li>98% client satisfaction rate and repeat clientele.</li>
                                <li>Certified Real Estate Negotiator (CRN) with 5+ years of field experience.</li>
                                <li>Managed over <strong>$10M+</strong> worth of property transactions.</li>
                                <li>Strong local market knowledge in <strong>New York & surrounding areas.</strong>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix">
                          <h6 class="card-title mb-3">Property Status</h6>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="border border-1 p-3 rounded-3">
                                <div class="d-flex align-items-end justify-content-between mb-2">
                                  <div class="clearfix">
                                    <h6 class="mb-0">For Rent</h6>
                                    <span>Target 1.5k/month</span>
                                  </div>
                                  <div class="clearfix text-end">
                                    <h6 class="mb-0">1,540</h6>
                                    <span class="mb-0 text-primary">87%</span>
                                  </div>
                                </div>
                                <div class="progress bg-primary bg-opacity-10" role="progressbar" aria-label="Retirement Plan Progress" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="height: 6px">
                                  <div class="progress-bar bg-primary" style="width: 87%"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="border border-1 p-3 rounded-3">
                                <div class="d-flex align-items-end justify-content-between mb-2">
                                  <div class="clearfix">
                                    <h6 class="mb-0">For Sale</h6>
                                    <span>Target 2k/month</span>
                                  </div>
                                  <div class="clearfix text-end">
                                    <h6 class="mb-0">1,120</h6>
                                    <span class="mb-0 text-secondary">77%</span>
                                  </div>
                                </div>
                                <div class="progress bg-secondary bg-opacity-10" role="progressbar" aria-label="Retirement Plan Progress" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 6px">
                                  <div class="progress-bar bg-secondary" style="width: 77%"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card overflow-hidden">
                  <div class="card-header border-0 pb-2 d-flex justify-content-between align-items-center">
                    <h6 class="card-title">Files</h6>
                    <div id="dt_Files_Search"></div>
                  </div>
                  <div class="card-body p-0 pb-2">
                    <table id="dt_Files" class="table">
                      <thead class="table-light">
                        <tr>
                          <th class="minw-200px">Name</th>
                          <th class="minw-125px">File Item</th>
                          <th class="minw-150px">Last Modified</th>
                          <th class="minw-150px">File Size</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-primary me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              My Drive
                            </div>
                          </th>
                          <td>215 Items</td>
                          <td>Oct 16, 2025</td>
                          <td>8.1 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-success me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Property Docs
                            </div>
                          </th>
                          <td>148 Items</td>
                          <td>Oct 14, 2025</td>
                          <td>3.4 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-info me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Client Files
                            </div>
                          </th>
                          <td>92 Items</td>
                          <td>Oct 10, 2025</td>
                          <td>2.6 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-warning me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Contracts
                            </div>
                          </th>
                          <td>63 Items</td>
                          <td>Oct 12, 2025</td>
                          <td>1.2 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-danger me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Invoices
                            </div>
                          </th>
                          <td>80 Items</td>
                          <td>Oct 15, 2025</td>
                          <td>900 MB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-secondary me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Leads
                            </div>
                          </th>
                          <td>110 Items</td>
                          <td>Oct 13, 2025</td>
                          <td>2.1 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-primary me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Reports
                            </div>
                          </th>
                          <td>54 Items</td>
                          <td>Oct 11, 2025</td>
                          <td>1.8 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-success me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Marketing
                            </div>
                          </th>
                          <td>72 Items</td>
                          <td>Oct 09, 2025</td>
                          <td>1.5 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-info me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Property Photos
                            </div>
                          </th>
                          <td>325 Items</td>
                          <td>Oct 16, 2025</td>
                          <td>6.3 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-warning me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Agreements
                            </div>
                          </th>
                          <td>47 Items</td>
                          <td>Oct 08, 2025</td>
                          <td>900 MB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-danger me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Leases
                            </div>
                          </th>
                          <td>38 Items</td>
                          <td>Oct 07, 2025</td>
                          <td>700 MB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-secondary me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Contracts Signed
                            </div>
                          </th>
                          <td>41 Items</td>
                          <td>Oct 13, 2025</td>
                          <td>1.1 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-primary me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Invoices Paid
                            </div>
                          </th>
                          <td>29 Items</td>
                          <td>Oct 14, 2025</td>
                          <td>500 MB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-success me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Pending Tasks
                            </div>
                          </th>
                          <td>65 Items</td>
                          <td>Oct 12, 2025</td>
                          <td>1.6 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-info me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Completed Deals
                            </div>
                          </th>
                          <td>33 Items</td>
                          <td>Oct 10, 2025</td>
                          <td>1.0 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-warning me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Pending Approvals
                            </div>
                          </th>
                          <td>17 Items</td>
                          <td>Oct 09, 2025</td>
                          <td>400 MB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-danger me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Client Contracts
                            </div>
                          </th>
                          <td>28 Items</td>
                          <td>Oct 11, 2025</td>
                          <td>780 MB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-secondary me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Marketing Materials
                            </div>
                          </th>
                          <td>58 Items</td>
                          <td>Oct 10, 2025</td>
                          <td>2.3 GB</td>
                        </tr>
                        <tr>
                          <th>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xxs rounded-circle text-bg-primary me-2">
                                <i class="fi fi-rr-folder"></i>
                              </div>
                              Team Files
                            </div>
                          </th>
                          <td>43 Items</td>
                          <td>Oct 15, 2025</td>
                          <td>1.9 GB</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header border-0 pb-0">
                    <h6 class="card-title">Agent Information</h6>
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush bg-gray bg-opacity-10">
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Agency:</span>
                        <h6 class="mb-0">Prime Estates Realty</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Agent License:</span>
                        <h6 class="mb-0">ALC-4598-1120-9823</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Tax Number:</span>
                        <h6 class="mb-0">TXN-3021-PL58-QA45</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Agent City:</span>
                        <h6 class="mb-0">Los Angeles</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Experience:</span>
                        <h6 class="mb-0">6 Years</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Specialization:</span>
                        <h6 class="mb-0">Luxury Apartments</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Active Status:</span>
                        <h6 class="mb-0 text-success">Active</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Member Since:</span>
                        <h6 class="mb-0">April 2020</h6>
                      </li>
                      <li class="list-group-item d-flex align-items-end justify-content-between px-0">
                        <span>Last Updated:</span>
                        <h6 class="mb-0">October 14, 2025</h6>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-4 mb-2">
                      <h6 class="card-title mb-0">Latest Listings</h6>
                      <div class="btn-group">
                        <button class="btn btn-sm btn-action-primary btn-icon btn-outline-light waves-effect dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fi fi-bs-menu-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-12 col-lg-6">
                    <div class="card card-body p-2">
                      <div class="row g-0">
                        <div class="col-sm-5">
                          <img src="assets/images/properties/list/pic1.jpg" alt="" class="w-100 rounded">
                        </div>
                        <div class="col-sm-7 d-flex flex-column justify-content-between p-3">
                          <div class="clearfix">
                            <h5 class="mb-1 fw-bold">
                              <a href="property-details.html" class="text-dark">Luxury Penthouse</a>
                            </h5>
                            <p class="mb-3 text-primary">For Rent</p>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-rs-marker me-1"></i>Dubai, UAE
                              </span>
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-rs-sack-dollar me-1"></i>$1,200,000
                              </span>
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-sr-land-layers me-1"></i>2,350 sq.ft
                              </span>
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-rr-bed-alt me-1"></i>4 / 3
                              </span>
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between border-1 border-top pt-3 mt-3">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="avatar avatar-xxs rounded-circle">
                                <img src="assets/images/avatar/avatar1.webp" alt="" class="w-100">
                              </div>
                              <h6 class="mb-0">James</h6>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                              <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light waves-effect">
                                <i class="fi fi-rs-heart"></i>
                              </button>
                              <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light waves-effect">
                                <i class="fi fi-rr-share"></i>
                              </button>
                              <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light waves-effect">
                                <i class="fi fi-rr-plus"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-12 col-lg-6">
                    <div class="card card-body p-2">
                      <div class="row g-0">
                        <div class="col-sm-5">
                          <img src="assets/images/properties/list/pic2.jpg" alt="" class="w-100 rounded">
                        </div>
                        <div class="col-sm-7 d-flex flex-column justify-content-between p-3">
                          <div class="clearfix">
                            <h5 class="mb-1 fw-bold">
                              <a href="property-details.html" class="text-dark">Modern Family Villa</a>
                            </h5>
                            <p class="mb-3 text-success">For Sale</p>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-rs-marker me-1"></i>California, USA
                              </span>
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-rs-sack-dollar me-1"></i>$950,000
                              </span>
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-sr-land-layers me-1"></i>3,000 sq.ft
                              </span>
                              <span class="badge bg-gray bg-opacity-10 text-dark d-flex align-items-center">
                                <i class="fi fi-rr-bed-alt me-1"></i>5 / 4
                              </span>
                            </div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between border-1 border-top pt-3 mt-3">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="avatar avatar-xxs rounded-circle">
                                <img src="assets/images/avatar/avatar2.webp" alt="" class="w-100">
                              </div>
                              <h6 class="mb-0">Olivia</h6>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                              <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light waves-effect">
                                <i class="fi fi-rs-heart"></i>
                              </button>
                              <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light waves-effect">
                                <i class="fi fi-rr-share"></i>
                              </button>
                              <button class="btn btn-action-primary btn-sm btn-icon btn-outline-light waves-effect">
                                <i class="fi fi-rr-plus"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </main>

    @endsection
