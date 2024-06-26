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
                            <h3 class="m-b-10">Add Why Choose Us</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('wcs')}}">Why Choose Us</a></li>
                            <li class="breadcrumb-item"><a href="#!">Create Why Choose Us</a></li>
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
                    <a href="{{url('wcs')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Add Why Choose Us</h3>
                        <div class="row">                  
                            <div class="col-md-6">
                                <form action="{{route('wcs.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" placeholder="Title" required />
                                        <span class="messages"></span>
                                    </div>
                                </div>
                               
                              
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="icon" id="p_img" required>
                                    <span class="messages"></span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alt Tag</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alt_tag" id="p_name" placeholder="Enter Alt Tag" required>
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
