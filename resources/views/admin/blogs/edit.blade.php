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
                            <h3 class="m-b-10">Update </h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('')}}"></a></li>
                            <li class="breadcrumb-item"><a href="#!">Update </a></li>
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
                        <a href="{{url('Blog')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update </h3>
                        <div class="row">
                            <div class="col-md-6">
                            <form id="main" action="{{ route('Blog.update', $data->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                    
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="title" id="name" placeholder="Title" value="{{ $data->title }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Slug</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="slug" id="slug" placeholder="Sub-Title" value="{{ $data->slug }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <textarea class="textarea" rows="3" cols="50" type="text" name="short_description" class="form-control" placeholder="Enter Short Description">{{ $data->short_description}}</textarea>
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Long Description</label>
                                            <div class="col-sm-8">
                                                <textarea class="textarea"  rows="3" cols="50" type="text" name="long_description" class="form-control" placeholder="Enter Long Description">{{ $data->long_description}}</textarea>
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Image<h6 style="font-size: 14px; color: red;">Size:(710 X 300px)</h6></label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" id="p_img">
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-8">
                                                <img class="img-fluid card-img-top" style="height: 300px; width: 710px;" src="{{ asset('Backend/images/blogs/' . $data->image) }}" alt="{{$data->alt_tag}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Alt Tag</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="alt_tag" class="form-control" placeholder="Enter Alt Tag For Image" value="{{$data->alt_tag}}" required/>
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Banner_Image<h6 style="font-size: 14px; color: red;">Size:(710 X 300px)</h6></label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="banner_image" id="p_img">
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-8">
                                                <img class="img-fluid card-img-top" style="height: 300px; width: 710px;" src="{{ asset('/Backend/images/blogs/' . $data->banner_image) }}" alt="Card image cap">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Banner Alt Tag</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="banner_alt_tag" class="form-control" placeholder="Enter Alt Tag For Banner Image" value="{{$data->banner_alt_tag}}" required/>
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Posted By</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="posted_by" id="p_name" placeholder="Posted by" value="{{ $data->posted_by }}">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Title</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title" value="{{$data->meta_title}}">
                                                     <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                 
                                                 <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Description</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_description" class="form-control" placeholder="Enter Meta Description" value="{{$data->meta_description}}">
                                                     <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                 
                                                 <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Keyword</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_keyword" class="form-control" placeholder="Enter Meta Keyword" value="{{$data->meta_keyword}}">
                                                     <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                 
                                                 <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Canonical</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_canonical" class="form-control" placeholder="Enter Meta Canonical" value="{{$data->meta_canonical}}">
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
