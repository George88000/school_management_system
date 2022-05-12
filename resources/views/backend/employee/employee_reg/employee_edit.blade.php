@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Edit Employee</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('update.employee.registration', $editData->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Employee Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->name }}" name="name" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Employee Father's Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->fname }}" name="fname" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Employee Mother's Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->mname }}" name="mname" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Mobile Number<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->mobile }}" name="mobile" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Address<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->address }}" name="address" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Gender<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="gender" id="gender" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Gender</option>
                                            <option value="male" {{ ($editData->gender == 'male') ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ ($editData->gender == 'female') ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Religion<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="religion" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Religion</option>
                                            <option value="islam" {{ ($editData->religion == 'islam') ? 'selected' : '' }}>Islam</option>
                                            <option value="hindu" {{ ($editData->religion == 'hindu') ? 'selected' : '' }}>Hindu</option>
                                            <option value="christian" {{ ($editData->religion == 'christian') ? 'selected' : '' }}>Christian</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Date of Birth<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" value="{{ $editData->dob }}" name="dob" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Designation<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="designation_id" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Designation</option>
                                            @foreach ($designation as $desi)
                                            <option value="{{ $desi->id }}" {{ ($editData->designation_id == $desi->id) ? 'selected' : '' }}>{{ $desi->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if (!$editData)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Salary<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->salary }}" name="salary" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if (!$editData)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Join Date<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" value="{{ $editData->join_date }}" name="join_date" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Profile Image<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <img src="{{ (!empty($editData->image))? url('upload/employee_images/'.$editData->image) : url('upload/no_image.jpg') }}"
                                        style="width: 100px; height: 100px; border: 1px solid #000000;" id="showImage" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                           </div>
                       </form>
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection