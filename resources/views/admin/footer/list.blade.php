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
                            <h3 class="m-b-10">Update Footer</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('footer')}}">Footer</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Footer</a></li>
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
                        <a href="{{url('footer')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Footer</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="main" action="{{route('footer.update', $footer->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">News_Letter</label>
                                        <div class="col-sm-8">
                                            <textarea class="textarea" rows="3" cols="50" type="text"
                                                name="news_description" class="form-control"
                                                placeholder="Enter Description">{{$footer->news_description}}</textarea>
                                            {{-- <span class="messages"></span> --}}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Instagram link</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="instagram_link" id="p_name"
                                                placeholder="Title" value="{{$footer->instagram_link}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Facebook link</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="facebook_link" id="p_name"
                                                placeholder="Title" value="{{$footer->facebook_link}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Twwiter</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="twitter_link" id="p_name"
                                                placeholder="Title" value="{{$footer->twitter_link}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Location</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="location" id="p_name"
                                                placeholder="Location" value="{{$footer->location}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Phone</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="phone1" id="p_name"
                                                placeholder="phone" value="{{$footer->phone1}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" name="email1" id="p_email1"
                                                placeholder="email1" value="{{$footer->email1}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Address</label>
                                        <div class="col-sm-8">
                                            <textarea class="" rows="3" cols="50" type="text" name="address"
                                                class="form-control"
                                                placeholder="Enter Address">{{$footer->address}}</textarea>
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Logo<h6
                                                style="font-size: 14px; color: red;">Size:(100 X 100px)</h6></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image" id="p_img">
                                            <span class="messages"></span>

                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top" style="height: 100px; width: 100px;"
                                                src="{{ asset('/Backend/images/blogs/' . $footer->image) }}"
                                                alt="Image"><br><br>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Alt Tag</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="alt_tag" id="p_name"
                                                placeholder="Enter Alt Tag" value="{{$footer->alt_tag}}">
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
