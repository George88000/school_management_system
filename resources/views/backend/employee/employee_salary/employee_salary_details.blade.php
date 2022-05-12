@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">{{ $details->name }} {{ $details->fname }}'s Salary Details</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Previous Salary</th>
                              <th>Increment Salary</th>
                              <th>Present Salary</th>
                              <th>Effected Date</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($salary_log as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->previous_salary }}</td>
                            <td>{{ $value->increment_salary }}</td>
                            <td>{{ $value->present_salary }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->effected_salary)) }}</td>
                        </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>       
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
@endsection