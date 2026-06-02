@extends('server.layout.master')
@section('contain')
    <main class="app-wrapper">

      <div class="container-fluid">

        <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
          <div class="clearfix">
            <h1 class="app-page-title">Analytics Dashboard</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="index.html" class="text-body">
                    <i class="fi fi-rr-home"></i>Home
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Analytics</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">

          <div class="col-xl-3 col-md-6 col-12">
            <div class="card card-body">
              <div class="d-flex align-items-center mb-3">
                <div class="avatar rounded-4 bg-primary text-white me-2">
                  <i class="fi fi-rr-apartment"></i>
                </div>
                <h6 class="card-title mb-0">Properties For Sale</h6>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="clearfix">
                  <p class="mb-1">Target 6K This Month</p>
                  <h3 class="fw-bold mb-0">3,256</h3>
                </div>
                <div id="AnalyticsScore1"></div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-12">
            <div class="card card-body">
              <div class="d-flex align-items-center mb-3">
                <div class="avatar rounded-4 bg-secondary text-white me-2">
                  <i class="fi fi-rr-mortgage"></i>
                </div>
                <h6 class="card-title mb-0">Properties for Rent</h6>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="clearfix">
                  <p class="mb-1">Target 5K This Month</p>
                  <h3 class="fw-bold mb-0">1,625</h3>
                </div>
                <div id="AnalyticsScore2"></div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-12">
            <div class="card card-body">
              <div class="d-flex align-items-center mb-3">
                <div class="avatar rounded-4 bg-success text-white me-2">
                  <i class="fi fi-rr-user"></i>
                </div>
                <h6 class="card-title mb-0">Active Agents</h6>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="clearfix">
                  <p class="mb-1">Working Now</p>
                  <h3 class="fw-bold mb-0">732</h3>
                </div>
                <div id="AnalyticsScore3"></div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-12">
            <div class="card card-body">
              <div class="d-flex align-items-center mb-3">
                <div class="avatar rounded-4 bg-info text-white me-2">
                  <i class="fi fi-sr-bullseye-arrow"></i>
                </div>
                <h6 class="card-title mb-0">Conversion Rate</h6>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="clearfix">
                  <p class="mb-1">Deals Closed</p>
                  <h3 class="fw-bold mb-0">27.6%</h3>
                </div>
                <div id="AnalyticsScore4"></div>
              </div>
            </div>
          </div>

          <div class="col-xxl-6">
            <div class="card">
              <div class="card-header border-0 pb-0 d-flex align-items-center justify-content-between">
                <h6 class="card-title mb-0">Property Revenue</h6>
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
                      <span class="text-2xs d-block">Income</span>
                      <h4 class="mb-0 fw-bold">$84,000</h4>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6 border-1 border-end">
                    <div class="px-3">
                      <span class="text-2xs d-block">Expenses</span>
                      <h4 class="mb-0 fw-bold">$75,000</h4>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6">
                    <div class="px-3">
                      <span class="text-2xs d-block">Profit</span>
                      <h4 class="mb-0 fw-bold">$32,514</h4>
                    </div>
                  </div>
                </div>
                <div id="AnalyticsRevenue"></div>
              </div>
            </div>
          </div>

          <div class="col-xxl-6">
            <div class="card">
              <div class="card-header border-0 pb-0 d-flex align-items-center justify-content-between">
                <h6 class="card-title mb-0">Sales Statistic</h6>
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
                <div id="SalesStatistic"></div>
              </div>
            </div>
          </div>

          <div class="col-xxl-12">
            <div class="card overflow-hidden">
              <div class="card-header d-flex flex-wrap gap-3 border-0 pb-2 align-items-center justify-content-between">
                <h6 class="card-title mb-0">Property Listing</h6>
                <div id="dt_PropertyListing_Search"></div>
              </div>
              <div class="card-body p-0 pb-2">
                <table id="dt_PropertyListing" class="table">
                  <thead class="table-light">
                    <tr>
                      <th class="minw-150px">Property ID</th>
                      <th class="minw-200px">Property Name</th>
                      <th class="minw-150px">Location</th>
                      <th class="minw-150px">Type</th>
                      <th class="minw-100px">Price</th>
                      <th class="minw-100px">Status</th>
                      <th class="minw-100px">ROI</th>
                      <th class="minw-100px">Occupancy</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>LDPROPERTY-001</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-primary me-2">
                            <img src="assets/images/properties/listing/pic1.jpg" alt="">
                          </div>
                          Skyline Villa
                        </div>
                      </td>
                      <td>Dubai, UAE</td>
                      <td>Villa</td>
                      <td>$1,45,752</td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Sold</span>
                      </td>
                      <td>12%</td>
                      <td>100%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-002</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-success me-2">
                            <img src="assets/images/properties/listing/pic2.jpg" alt="">
                          </div>
                          Greenwood Apartment
                        </div>
                      </td>
                      <td>London, UK</td>
                      <td>Apartment</td>
                      <td>$2,10,500</td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Available</span>
                      </td>
                      <td>10%</td>
                      <td>92%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-003</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-warning me-2">
                            <img src="assets/images/properties/listing/pic3.jpg" alt="">
                          </div>
                          Oceanview Penthouse
                        </div>
                      </td>
                      <td>Miami, USA</td>
                      <td>Penthouse</td>
                      <td>$3,45,900</td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>15%</td>
                      <td>87%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-004</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-info me-2">
                            <img src="assets/images/properties/listing/pic4.jpg" alt="">
                          </div>
                          Lakeview Residency
                        </div>
                      </td>
                      <td>Toronto, Canada</td>
                      <td>Condo</td>
                      <td>$1,89,700</td>
                      <td>
                        <span class="badge bg-info-subtle text-info">Rented</span>
                      </td>
                      <td>11%</td>
                      <td>96%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-005</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-secondary me-2">
                            <img src="assets/images/properties/listing/pic5.jpg" alt="">
                          </div>
                          Sunrise Towers
                        </div>
                      </td>
                      <td>Singapore</td>
                      <td>Commercial</td>
                      <td>$4,25,600</td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Sold</span>
                      </td>
                      <td>9%</td>
                      <td>100%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-006</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-primary me-2">
                            <img src="assets/images/properties/listing/pic6.jpg" alt="">
                          </div>
                          Royal Garden Estate
                        </div>
                      </td>
                      <td>Melbourne, Australia</td>
                      <td>Villa</td>
                      <td>$2,95,400</td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Available</span>
                      </td>
                      <td>13%</td>
                      <td>89%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-007</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-danger me-2">
                            <img src="assets/images/properties/listing/pic7.jpg" alt="">
                          </div>
                          Empire Heights
                        </div>
                      </td>
                      <td>New York, USA</td>
                      <td>Apartment</td>
                      <td>$5,10,300</td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Sold</span>
                      </td>
                      <td>14%</td>
                      <td>100%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-008</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-success me-2">
                            <img src="assets/images/properties/listing/pic8.jpg" alt="">
                          </div>
                          Palm Grove Residency
                        </div>
                      </td>
                      <td>Bangkok, Thailand</td>
                      <td>Condo</td>
                      <td>$1,75,200</td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Available</span>
                      </td>
                      <td>10%</td>
                      <td>93%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-009</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-warning me-2">
                            <img src="assets/images/properties/listing/pic9.jpg" alt="">
                          </div>
                          Horizon Business Park
                        </div>
                      </td>
                      <td>Berlin, Germany</td>
                      <td>Commercial</td>
                      <td>$6,40,800</td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>8%</td>
                      <td>85%</td>
                    </tr>
                    <tr>
                      <td>LDPROPERTY-010</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs rounded-circle text-bg-info me-2">
                            <img src="assets/images/properties/listing/pic10.jpg" alt="">
                          </div>
                          Mountain View Lodge
                        </div>
                      </td>
                      <td>Zurich, Switzerland</td>
                      <td>Resort</td>
                      <td>$3,80,650</td>
                      <td>
                        <span class="badge bg-info-subtle text-info">Rented</span>
                      </td>
                      <td>16%</td>
                      <td>98%</td>
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
