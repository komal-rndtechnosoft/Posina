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
                            <h3 class="m-b-10">Add Category</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('category')}}">Category</a></li>
                            <li class="breadcrumb-item"><a href="#!">Create Category</a></li>
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
                        <a href="{{url('category')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Add Category</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{route('category.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" id="name"
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
                                        <label class="col-sm-4 col-form-label">Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image" id="p_img">
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
