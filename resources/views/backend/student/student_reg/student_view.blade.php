@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="box bb-3 border-warning">
            <div class="box-header">
            <h4 class="box-title">Student <strong>Search</strong></h4>
            </div>
  
            <div class="box-body">
              <form action="" method="">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                        <h5>Year</h5>
                        <div class="controls">
                            <select name="year_id" class="form-control">
                                <option value="" selected="" disabled="">Select Year</option>
                                @foreach ($years as $year)
                                <option value="{{ $year->id }}">{{ $year->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <h5>Class</h5>
                          <div class="controls">
                              <select name="class_id" class="form-control">
                                  <option value="" selected="" disabled="">Select Class</option>
                                  @foreach ($classes as $class)
                                  <option value="{{ $class->id }}">{{ $class->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4" style="padding-top: 25px;">
                    <input type="submit" name="search" value="Search" class="btn btn-rounded btn-dark mb-5">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Student List</h3>
                <a href="{{ route('student.registration.add') }}" class="btn btn-rounded btn-success mb-5 float-right">Add Student</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Name</th>
                              <th>ID No</th>
                              <th width="25%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($allData as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->class_id }}</td>
                            <td>{{ $value->year_id }}</td>
                            <td>
                                <a href="" class="btn btn-info">Edit</a>
                                <a href="" id="delete" class="btn btn-danger">Delete</a>
                            </td>
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