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
                            <h3 class="m-b-10">Update Mission_Vision</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('MissionVision')}}">Mission_Vision</a></li>
                            <li class="breadcrumb-item"><a >Update Mission_Vision</a></li>
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
                        <a href="{{url('MissionVision')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Mission_Vision</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('MissionVision.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Mission_Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="about_title" id="p_name"
                                                placeholder="Title" value="{{$data->about_title}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea rows="3" cols="70" type="text"
                                                name="about_description" class="form-control"
                                                placeholder="Enter Description">{{$data->about_description}}</textarea>
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Mision Front Icon<h6
                                                style="font-size: 14px; color: red;">Size:(100X 55px)</h6></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image" id="p_img">
                                            <span class="messages"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Alt Tag</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="alt_tag" id="p_name"
                                                placeholder="Enter Alt Tag" value="{{$data->alt_tag}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top" style="height:200px;width:200px;"
                                                src="{{ asset('/Backend/images/miss/' . $data->image) }}"
                                                alt="Image"><br><br>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Mision Back Icon<h6
                                                style="font-size: 14px; color: red;">Size:(100X 55px)</h6></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image2" id="p_img">
                                            <span class="messages"></span>

                                        </div>
                                    </div>
                                  

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top" style="height:200px;width:200px;"
                                                src="{{ asset('/Backend/images/miss/' . $data->image2) }}"
                                                alt="Image"><br><br>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Vision_Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="about_title1" id="p_name"
                                                placeholder="Title" value="{{$data->about_title1}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea  rows="3" cols="70" type="text"
                                                name="about_description1" class="form-control"
                                                placeholder="Enter Description">{{$data->about_description1}}</textarea>
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Image<h6
                                                style="font-size: 14px; color: red;">Size:(100X 55px)</h6></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image1" id="p_img">
                                            <span class="messages"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Vision Alt Tag1</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="alt_tag1" id="p_name"
                                                placeholder="Enter Alt Tag" value="{{$data->alt_tag1}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top" style="height:200px;width:200px;"
                                                src="{{ asset('/Backend/images/miss/' . $data->image1) }}"
                                                alt="Image"><br><br>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Vision Back Icon<h6
                                                style="font-size: 14px; color: red;">Size:(100X 55px)</h6></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image3" id="p_img">
                                            <span class="messages"></span>

                                        </div>
                                    </div>
                                  

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top" style="height:200px;width:200px;"
                                                src="{{ asset('/Backend/images/miss/' . $data->image3) }}"
                                                alt="Image"><br><br>
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
