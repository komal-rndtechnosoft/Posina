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
                            <h3 class="m-b-10">Update Industry We Serve</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('serve')}}">Industry We Serve</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Industry We Serve</a></li>
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
                        <a href="{{url('serve')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Industry We Serve</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="main" action="{{route('serve.update', $data->id)}}" method="POST"
                                    enctype="multipart/form-data">

                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Title" value="{{$data->title}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="textarea" rows="3" cols="50" type="text" name="description"
                                                class="form-control"
                                                placeholder="Enter Description">{{$data->description}}</textarea>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Icon<h6
                                                style="font-size: 14px; color: red;">Size:(150 X 150px)</h6></label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="icon" id="p_img">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img class="img-fluid card-img-top"
                                                style="height: 150px; width: 150px; background-color: black;"
                                                src="{{ asset('Backend/images/serve/' . $data->icon) }}"
                                                alt="{{$data->alt_tag}}"><br><br>
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
                                        <label class="col-sm-2 col-form-label">Image<h6
                                                style="font-size: 14px; color: red;">Size:(150 X 150px)</h6></label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image" id="p_img">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img class="img-fluid card-img-top"
                                                style="height: 150px; width: 150px; background-color: black;"
                                                src="{{ asset('Backend/images/serve/' . $data->image) }}"
                                                alt="{{$data->alt_tag1}}"><br><br>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image Alt Tag</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="alt_tag1" id="p_name"
                                                placeholder="Enter Alt Tag" value="{{$data->alt_tag1}}">
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
