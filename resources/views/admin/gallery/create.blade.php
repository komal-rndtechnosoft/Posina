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
                            <h3 class="m-b-10">Add Image</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('gallery')}}">Gallery</a></li>
                            <li class="breadcrumb-item"><a href="#!">Create Gallery</a></li>
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
                        <h3>Add Image</h3>
                        <div class="row">                  
                            <div class="col-md-6">
                                <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Category</label>
                                        <select name="cat_id" class="form-control" id="cat_id">
                                            @foreach($data as $d)
                                            <option value="{{$d->id}}">{{$d->cat_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

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
