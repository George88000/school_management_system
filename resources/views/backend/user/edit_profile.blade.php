@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Manage Profile</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->name }}" name="name" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Email<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" value="{{ $editData->email }}" name="email" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Mobile</h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->mobile }}" name="mobile" placeholder="Enter Phone Number..." class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Address</h5>
                                    <div class="controls">
                                        <input type="text" value="{{ $editData->address }}" name="address" placeholder="Enter Address..." class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Gender <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="gender" id="gender" required="" class="form-control">
                                            <option value="" selected="" disabled="">Select Gender</option>
                                            <option value="male" {{ ($editData->gender == 'male' ? 'selected' : '') }}>Male</option>
                                            <option value="female" {{ ($editData->gender == 'female' ? 'selected' : '') }}>Female</option>
                                            
                                        </select>
                                    </div>
                                </div>	
                           </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <h5>Profile Image</h5>
                                <div class="controls">
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <img src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image) : url('upload/no_image.jpg') }}"
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