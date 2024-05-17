@include('admin.header')
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h3 class="m-b-10">Add Banner</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('banner')}}">Banner</a></li>
                            <li class="breadcrumb-item"><a href="#!">Create Banner</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                    <a href="{{url('banner')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Add Banner</h3>
                        <div class="row">                  
                            <div class="col-md-6">
                                <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Title</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="title"  placeholder="Title" required/>
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Sub-Title</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="subtitle"  placeholder="Sub-Title" required/>
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>

                                               <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="textarea form-control" rows="3" name="description" placeholder="Enter Description"></textarea>
                                                        <span class="messages"></span>
                                                    </div>
                                                </div> -->

                                                 
                                                 <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">BannerImage</label>
                                                    <div class="col-sm-10">
                                                       <input type="file" class="form-control" name="banner_image" required/>
                                                       <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                   
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Alt Tag</label>
                                                    <div class="col-sm-10">
                                                     <input type="text" name="alt_tag" class="form-control" placeholder="Enter Alt Tag For Banner Image" required/>
                                                     <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                 
                                                <div class="form-group row">
                                                   <label class="col-sm-2"></label>
                                                   <div class="col-sm-10">
                                                      <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                   </div>
                                                </div>
                                             </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->
@include('admin.footer')
