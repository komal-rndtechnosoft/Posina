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
                            <h3 class="m-b-10">Update menu</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('menu')}}">Menu</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Menu</a></li>
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
                        <h3>Update Menu</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="main" action="{{route('menu.update', $data->id)}}" method="POST"
                                    enctype="multipart/form-data">

                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Page Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="page_name" id="name"
                                                placeholder="Title" value="{{$data->page_name}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slug</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                placeholder="Sub-Title" value="{{$data->slug}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Banner Image<h6
                                                style="font-size: 14px; color: red;">Size:(1200 X 400px)</h6></label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="banner_image" id="p_img">
                                            <span class="messages"></span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img class="img-fluid card-img-top" style="height: 400px; width: 1200px;"
                                                src="{{ asset('Backend/images/menu/' . $data->banner_image) }}"
                                                alt="Image"><br><br>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alt Tag</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="alt_tag" id="p_name"
                                                placeholder="Enter Alt Tag" value="{{$data->alt_tag}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_title" class="form-control"
                                                placeholder="Enter Meta Title" value="{{$data->meta_title}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_description" class="form-control"
                                                placeholder="Enter Meta Description"
                                                value="{{$data->meta_description}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Keyword</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_keyword" class="form-control"
                                                placeholder="Enter Meta Keyword" value="{{$data->meta_keyword}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Canonical</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_canonical" class="form-control"
                                                placeholder="Enter Meta Canonical" value="{{$data->meta_canonical}}">
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script>
                        $(document).ready(function(){
                            $("#name").on("input", function(){
                                // Print entered value in a div box
                                    $("#slug").val($(this).val().split(' ').join('_').toLowerCase());

                            });
                        });
                        </script>
@include('admin.footer')
