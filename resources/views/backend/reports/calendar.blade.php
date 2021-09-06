@extends('backend.layouts.dashboard.master')
@section('title', 'Calender Reports')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/custom-calender.css')}}">
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>Calender Reports</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item">Calender Reports</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 xl-100 box-col-12">
            <div class="card">
                <div class="cal-date-widget card-body">
                    <div class="row">
                        <div class="col-xl-12 col-xs-12 col-md-12 col-sm-12">
                            <div class="form-group row">
								<label class="col-sm-3 col-form-label text-right">Pick Date</label>
								<div class="col-xl-5 col-sm-9">
									<div class="input-group">
										<input class="datepicker-here form-control digits" type="text" data-language="en" value="{{ date('m/d/Y') }}">
									</div>
								</div>
							</div>
                        </div>
                        <div class="col-xl-12 col-xs-12 col-md-12 col-sm-12">
                            <div class="cal-info text-center">
                               <div class="row">
                                <div class="col-xl-12 col-lg-12 box-col-12 xl-100">
                                    <div class="card" style="border:none;">

                                       <div class="card-body">
                                          <div class="chart-container">
                                             <div id="circlechart"></div>
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
</div>




<div class="col-xl-12 xl-100 dashboard-sec box-col-12">
    <div class="card earning-card">
      <div class="card-body p-0">
        <div class="row m-0">
          <div class="col-xl-12 p-0">
            <div class="chart-right">
              <div class="row m-0 p-tb">
                <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                  <div class="inner-top-left">
                    <ul class="d-flex list-unstyled">
                      <li>Monthly</li>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                  <div class="inner-top-right">
                    <ul class="d-flex list-unstyled justify-content-end">
                      <li>Average</li>
                      <li>Highest</li>
                      <li>Lowest</li>
                      <li>Check in</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12">
                  <div class="card-body p-0">
                    <div class="current-sale-container">
                      <div id="chart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top m-0">
              <div class="col-xl-4 pl-0 col-md-6 col-sm-6">
                <div class="media p-0">
                  <div class="media-left"><i class="icofont icofont-crown"></i></div>
                  <div class="media-body">
                    <h6>Average Temperature</h6>
                    <p>36 C</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="media p-0">
                  <div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
                  <div class="media-body">
                    <h6>Average High Temperature</h6>
                    <p>38 C</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-12 pr-0">
                <div class="media p-0">
                  <div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
                  <div class="media-body">
                    <h6>Average Low Temperature</h6>
                    <p>35 C</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection

    @section('script')
    <script>
    $(".datepicker-here").click(function() {
        console.log(dateObject);
    });

    </script>
    <script src="{{asset('backend/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('backend/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('backend/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{asset('backend/js/chart/knob/knob-chart.js')}}"></script>


    <script src="{{asset('backend/js/chart/apex-chart/moment.min.js')}}"></script>
    <script src="{{asset('backend/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('backend/js/chart/apex-chart/stock-prices.js')}}"></script>

    <script src="{{asset('backend/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('backend/js/dashboard/default.js')}}"></script>
    <script src="{{asset('backend/js/notify/index.js')}}"></script>

    <script src="{{asset('backend/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('backend/js/clipboard/clipboard.min.js')}}"></script>

    <script src="{{asset('backend/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backend/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('backend/js/counter/counter-custom.js')}}"></script>

    <script src="{{asset('backend/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('backend/js/chart-widget.js')}}"></script>


    <script src="{{asset('backend/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('backend/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('backend/js/datepicker/date-picker/datepicker.custom.js')}}"></script>

<script>
         var options = {
          series: [{
          name: 'average temp',
          data: [31, 40, 28, 51, 42, 109, 100, 22,16, 32, 45, 22, 34, 70, 22, 22, 31, 40, 28, 51, 42, 109, 100, 22,16, 32, 45, 22, 34, 70, 100]
        }, {
          name: 'highest average',
          data: [11, 32, 45, 32, 34, 52, 41, 22,16, 32, 45, 22, 34, 70, 22, 22, 31, 40, 28, 51, 42, 109, 100, 22,16, 32, 45, 22, 34, 50, 70]
        }, {
          name: 'lowest average',
          data: [18, 39, 45, 32, 40, 52, 80, 22,16, 32, 45, 22, 34, 70, 22, 22, 31, 40, 28, 51, 42, 109, 100, 22,16, 32, 45, 22, 34, 70, 40]
        }, {
          name: 'total checkin',
          data: [16, 32, 45, 22, 34, 70, 22, 22, 16, 32, 45, 22, 34, 70, 22, 22, 31, 40, 28, 51, 42, 109, 100, 22,16, 32, 45, 22, 34, 70, 70]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth',
        },
        xaxis: {
          type: 'date',
          categories: ["1 JAN", "2 Jan","3 Jan","4 Jan","5 Jan","6 Jan","7 Jan","8 Jan","9 JAN", "10 Jan","11 Jan","12 Jan","13 Jan","14 Jan","15 Jan","16 Jan", "17 JAN", "18 Jan","19 Jan","20 Jan","21 Jan","22 Jan","23 Jan","24 Jan","25 JAN", "26 Jan","27 Jan","28 Jan","29 Jan","30 Jan","31 Jan"]
        },
        tooltip: {
          x: {
            format: ''
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
    @endsection
