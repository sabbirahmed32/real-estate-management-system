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
          <a href="{{route('add.agent')}}" class="btn btn-primary">
            <i class="fi fi-rr-plus me-2"></i> Add Agents
          </a>
        </div>

        <div class="row">
        @forelse ($agents as $agent)
            <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <div class="card-body p-2">
                 <img src="{{ asset('uploads/agents/'. $agent->image) }}"
                        alt="{{ $agent->image }}"
                        class="w-100 rounded mb-3"
                        style="height:220px;object-fit:cover;">

                <div class="clearfix px-2">
                  <h5 class="mb-0">{{$agent->name}}</h5>
                  <small class="mb-2 d-block">{{$agent->agents_type}}</small>
                  <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                    <span class="badge badge-sm bg-gray bg-opacity-10 text-dark fw-semibold">Properties: {{$agent->properties_number}}</span>
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
        @empty

        @endforelse


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
