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
                            <h3 class="m-b-10">Update Staticseo</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('product')}}">Update Staticseo</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Staticseo</a></li>
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
                        <a href="{{url('menu')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Staticseo</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('updatedesc1')}}" method="POST" enctype="multipart/form-data">

                                    {{ csrf_field() }}

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta_Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_title" id="sub_title"
                                                placeholder="meta_title" value="{{$data->meta_title}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta_Keywords</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_keyword" id="sub_title"
                                                placeholder="meta_keyword" value="{{$data->meta_keyword}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta_Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_description"
                                                id="sub_title" placeholder="meta_description"
                                                value="{{$data->meta_description}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Canonical_url</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_canonical" id="sub_title"
                                                placeholder="Canonical_url" value="{{$data->meta_canonical}}">
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
