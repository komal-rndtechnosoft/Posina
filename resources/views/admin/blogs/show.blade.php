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
                            <h3 class="m-b-10">Update Title</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('blogs')}}">Blogs</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Blogs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{url('Blog')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Blogs</h3>
                        <div class="row">
                            <div class="col-md-6">
                            <form action="{{ route('update4')}}" method="POST" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                    <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$data->title}}"
                                            required />
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Subtitle</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="subtitle" placeholder="Enter Title" value="{{$data->subtitle}}"
                                            required />
                                        <span class="messages"></span>
                                    </div>
                                </div>
                           
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-4"></label>
                                        <div class="col-sm-8">
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
