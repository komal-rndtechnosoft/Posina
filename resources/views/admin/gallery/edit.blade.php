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
                            <h3 class="m-b-10">Update Image</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('gallery')}}">Gallery</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Gallery</a></li>
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
                    <a href="{{url('gallery')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Image</h3>
                        <div class="row">                  
                            <div class="col-md-6">
                                <form action="{{route('gallery.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                    <label for="">Upload Image</label>
                                    <br>
                                    <div class="input-group mb-3">
                               
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                        <label class="custom-file-label" for="inputGroupFile01" >Choose file</label>
                                    </div>
                                    </div>
                                    <br>
                                    <img class="img-fluid card-img-top" style="height: 400px; width: 400px;" src="{{ asset('admin/assets/images/gallery/'.$data->image)}}" alt="Card image cap"><br><br>

                                
                                    <button type="submit" class="btn  btn-primary">Submit</button>
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
