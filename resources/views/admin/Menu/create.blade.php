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
                            <h3 class="m-b-10">Add Menu</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('menu')}}">Menu</a></li>
                            <li class="breadcrumb-item"><a href="#!">Create Menu</a></li>
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
                        <h3>Add menu</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="main" action="{{route('menu.store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Page Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="page_name" id="name"
                                                placeholder="Name" required>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Slug</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                placeholder="Slug" required>
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Banner Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="banner_image" id="p_img"
                                                required>
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Alt Tag</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="alt_tag" id="p_name"
                                            placeholder="Enter Alt Tag" required>
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_title" class="form-control"
                                                placeholder="Enter Meta Title">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_description" class="form-control"
                                                placeholder="Enter Meta Description">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Keyword</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_keyword" class="form-control"
                                                placeholder="Enter Meta Keyword">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Canonical</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_canonical" class="form-control"
                                                placeholder="Enter Meta Canonical">
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script>
                        $(document).ready(function(){
                            $("#name").on("input", function(){
                                // Print entered value in a div box
                                    $("#slug").val($(this).val().split(' ').join('_').toLowerCase());

                            });
                        });
                        </script>
<!-- [ Main Content ] end -->
@include('admin.footer')
