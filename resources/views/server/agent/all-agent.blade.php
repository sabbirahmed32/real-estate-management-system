@extends('server.layout.master')
@section('contain')
    <main class="app-wrapper">

      <div class="container-fluid">

        <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
          <div class="clearfix">
            <h1 class="app-page-title mb-0">All Agents</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="index.html" class="text-body">
                    <i class="fi fi-rr-home"></i>Home
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">All Agents</li>
              </ol>
            </nav>
          </div>
          <a href="add-agent.html" class="btn btn-primary">
            <i class="fi fi-rr-plus me-2"></i> All Agents
          </a>
        </div>

        <div class="row">
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
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
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent2.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Emily Johnson</h5>
                  <small class="mb-2 d-block">Property Consultant</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 28</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 15</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.6)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent3.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Michael Brown</h5>
                  <small class="mb-2 d-block">Sales Executive</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 40</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 25</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.9)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent4.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Sophia Davis</h5>
                  <small class="mb-2 d-block">Luxury Property Expert</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 22</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 14</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.7)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent5.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Daniel Wilson</h5>
                  <small class="mb-2 d-block">Real Estate Broker</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 45</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 30</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.9)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent6.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Olivia Taylor</h5>
                  <small class="mb-2 d-block">Commercial Agent</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 20</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 10</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.5)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent7.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">James Anderson</h5>
                  <small class="mb-2 d-block">Property Manager</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 38</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 27</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.8)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent8.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Ava Martinez</h5>
                  <small class="mb-2 d-block">Real Estate Consultant</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 18</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 9</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.4)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent2.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Emily Johnson</h5>
                  <small class="mb-2 d-block">Property Consultant</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 28</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 15</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.6)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent3.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Michael Brown</h5>
                  <small class="mb-2 d-block">Sales Executive</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 40</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 25</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.9)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent4.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Sophia Davis</h5>
                  <small class="mb-2 d-block">Luxury Property Expert</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 22</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 14</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.7)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                <img src="assets/images/avatar/agents/agent5.webp" alt="" class="w-100 rounded mb-3">
                <div class="clearfix px-2">
                  <h5 class="mb-0">Daniel Wilson</h5>
                  <small class="mb-2 d-block">Real Estate Broker</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: 45</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Sold: 30</span>
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Rating: (4.9)</span>
                  </div>
                </div>
              </div>
              <div class="card-footer p-3 pt-0 border-0 gap-2 d-flex">
                <a href="agent-profile.html" class="btn flex-grow-1 btn-sm btn-outline-primary">View Profile</a>
                <a href="email/inbox.html" class="btn flex-grow-1 btn-sm btn-outline-secondary">Message</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                    <i class="fi fi-rr-angle-double-left"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link active" href="javascript:void(0);">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);" aria-label="Next">
                    <i class="fi fi-rr-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>

    </main>

  @endsection
