@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Edit Student</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                    <form method="post" action="{{ route('update.student.registration',$editData->student_id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $editData->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Student Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->student->name }}" name="name" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Student Father's Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->student->fname }}" name="fname" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Student Mother's Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->student->mname }}" name="mname" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Mobile Number<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="mobile" value="{{ $editData->student->mobile }}" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Address<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="address" value="{{ $editData->student->address }}" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Gender<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="gender" id="gender" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Gender</option>
                                            <option {{ ($editData->student->gender == 'male' ? 'selected' : '') }} value="male">Male</option>
                                            <option {{ ($editData->student->gender == 'female' ? 'selected' : '') }} value="female">Female</option>
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
                                            <option {{ ($editData->student->religion == 'islam' ? 'selected' : '') }} value="islam">Islam</option>
                                            <option {{ ($editData->student->religion == 'hindu' ? 'selected' : '') }} value="hindu">Hindu</option>
                                            <option {{ ($editData->student->religion == 'christian' ? 'selected' : '') }} value="christian">Christian</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Date of Birth<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" value="{{ $editData->student->dob }}" name="dob" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Discount<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->discount->discount }}" name="discount" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Year<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="year_id" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Year</option>
                                            @foreach ($years as $year)
                                            <option value="{{ $year->id }}" {{ ($editData->year_id == $year->id) ? 'selected' : '' }}>{{ $year->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Class<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="class_id" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Class</option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}" {{ ($editData->class_id == $class->id) ? 'selected' : '' }}>{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Group<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="group_id" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Group</option>
                                            @foreach ($groups as $group)
                                            <option value="{{ $group->id }}" {{ ($editData->group_id == $group->id) ? 'selected' : '' }}>{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Shift<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="shift_id" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Year</option>
                                            @foreach ($shifts as $shift)
                                            <option value="{{ $shift->id }}" {{ ($editData->shift_id == $shift->id) ? 'selected' : '' }}>{{ $shift->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Profile Image<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <img src="{{ (!empty($editData->student->image))? url('upload/student_images/'.$editData->student->image) : url('upload/no_image.jpg') }}"
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