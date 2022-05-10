@extends('admin.admin_master')
@section('admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="box bb-3 border-warning">
              <div class="box-header">
              <h4 class="box-title">Student <strong>Monthly Fee</strong></h4>
              </div>
    
              <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                          <h5>Year</h5>
                          <div class="controls">
                              <select name="year_id" id="year_id" class="form-control">
                                  <option value="" selected="" disabled="">Select Year</option>
                                  @foreach ($years as $year)
                                  <option value="{{ $year->id }}">{{ $year->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <h5>Class</h5>
                            <div class="controls">
                                <select name="class_id" id="class_id" class="form-control">
                                    <option value="" selected="" disabled="">Select Class</option>
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <h5>Month</h5>
                            <div class="controls">
                                <select name="month" id="month" class="form-control">
                                    <option value="" selected="" disabled="">Select Month</option>
                                    <option value="january">January</option>
                                    <option value="february">February</option>
                                    <option value="march">March</option>
                                    <option value="april">April</option>
                                    <option value="may">May</option>
                                    <option value="june">June</option>
                                    <option value="july">July</option>
                                    <option value="august">August</option>
                                    <option value="september">September</option>
                                    <option value="october">October</option>
                                    <option value="november">November</option>
                                    <option value="december">December</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 25px;">
                        <a id="search" class="btn btn-primary" name="search">Search</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div id="DocumentResults">
                            <script id="document-template" type="text/x-handlebars-template">

                                <table class="table table-bordered table-striped" style="width: 100%">
                                <thead>
                                    <tr>
                                   @{{{thsource}}}
                                    </tr>
                                 </thead>
                                 <tbody>
                                     @{{#each this}}
                                     <tr>
                                         @{{{tdsource}}}	
                                     </tr>
                                     @{{/each}}
                                 </tbody>
                                </table>
                               </script>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<script type="text/javascript">
    $(document).on('click','#search',function(){
      var year_id = $('#year_id').val();
      var class_id = $('#class_id').val();
      var month = $('#month').val();
       $.ajax({
        url: "{{ route('student.monthly.fee.classwise.get')}}",
        type: "get",
        data: {'year_id':year_id,'class_id':class_id, 'month': month},
        beforeSend: function() {       
        },
        success: function (data) {
          var source = $("#document-template").html();
          var template = Handlebars.compile(source);
          var html = template(data);
          $('#DocumentResults').html(html);
          $('[data-toggle="tooltip"]').tooltip();
        }
      });
    });
  
  </script>
  
@endsection