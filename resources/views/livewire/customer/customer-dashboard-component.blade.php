
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <div class="d-flex justify-content-between">
                              <h4 class="font-weight-normal mb-3">Totol Employees 
                              </h4>
                              <i class="mdi  mdi-account-multiple mdi-24px float-right"></i>
                            </div>
                            <h2>$ 15,0000</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <div class="d-flex justify-content-between">
                              <h4 class="font-weight-normal mb-3">Total Clients 
                              </h4>
                              <i class="mdi mdi-account-switch mdi-24px float-right"></i>
                            </div>
                            <h2>45,6334</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <div class="d-flex justify-content-between">
                              <h4 class="font-weight-normal mb-3">Total Projects 
                              </h4>
                              <i class="mdi mdi-android-studio mdi-24px float-right"></i>
                            </div>
                            <h2>95,5741</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <div class="d-flex justify-content-between">
                              <h4 class="font-weight-normal mb-3">Due Invoices
                              </h4>
                              <i class="mdi mdi-book-minus mdi-24px float-right"></i>
                            </div>
                            <h2>95,5741</h2>
                        </div>
                    </div>
                </div>
          </div>
          <div class="row">
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <div class="d-flex justify-content-between">
                          <h4 class="font-weight-normal mb-3">Hours Logged 
                          </h4>
                          <i class="mdi mdi-alarm-check mdi-24px float-right"></i>
                        </div>
                        <h2>$ 15,0000</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <div class="d-flex justify-content-between">
                          <h4 class="font-weight-normal mb-3">Pending Tasks 
                          </h4>
                          <i class="mdi mdi-alert-circle-outline mdi-24px float-right"></i>
                        </div>
                        <h2>45,6334</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <div class="d-flex justify-content-between">
                          <h4 class="font-weight-normal mb-3">Today Attendance 
                          </h4>
                          <i class="mdi mdi-calendar-clock mdi-24px float-right"></i>
                        </div>
                        <h2>95,5741</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <div class="d-flex justify-content-between">
                          <h4 class="font-weight-normal mb-3">Unresolved Tickets </h4>
                          <i class="mdi mdi-alert-outline mdi-24px float-right"></i>
                        </div>
                        <h2>95,5741</h2>
                    </div>
                </div>
            </div>
      </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                    <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                  </div>
                  <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Traffic Sources</h4>
                  <canvas id="traffic-chart"></canvas>
                  <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                </div>
              </div>
            </div>
          </div>

    


