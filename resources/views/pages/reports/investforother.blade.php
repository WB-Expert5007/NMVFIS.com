@extends('layouts.app', ['activePage' => 'inv_other', 'titlePage' => __('InvestForOthers Report')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">InvestForOthers Report</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
            </div>
            <div class="material-datatables">
              <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 70px;" aria-label="Sr: activate to sort column ascending">Sr. No</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending">Amount</th>
                          <th class="sorting_desc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" aria-sort="descending">Date</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th rowspan="1" colspan="1">Sr. No</th>
                          <th rowspan="1" colspan="1">Name</th>
                          <th rowspan="1" colspan="1">Amount</th>
                          <th rowspan="1" colspan="1">Date</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        @if($reports)
                        @foreach($reports as $key => $report)
                        @if($key%2 == 0)
                        <tr role="row" class="odd">
                          @else
                        <tr role="row" class="even">
                          @endif
                          <td class="" tabindex="0">{{$key +1}}</td>
                          <td>{{$report->name}}</td>
                          <td>{{$report->amount}}</td>
                          <td>{{$report->created_at}}</td>
                        </tr>
                        @endforeach
                        @else
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
  </div>
</div>
@endsection