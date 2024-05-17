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
                            <h3 class="m-b-10">Update Header</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('Header')}}">Header</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Header</a></li>
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
                        <a href="{{url('header')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Header</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="main" action="{{route('header.update', $header->id)}}" method="POST"
                                    enctype="multipart/form-data">

                                     {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Phone Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="phone"
                                                placeholder="Enter Title" value="{{$header->phone}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Time</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="time"
                                                placeholder="Enter time" value="{{$header->time}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Address</label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="address"
                                                placeholder="Enter address" value="{{$header->address}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Logo<h6
                                                style="font-size: 14px; color: red;">Size:(150 X 150px)</h6></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image" id="p_img">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top"
                                                style="height: 150px; width: 150px; background-color: black;"
                                                src="{{ asset('Backend/images/header/' . $header->image) }}"
                                                alt="{{$header->alt_tag}}"><br><br>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Alt Tag</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="alt_tag" id="p_name"
                                                placeholder="Enter Alt Tag" value="{{$header->alt_tag}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Fav icon<h6
                                                style="font-size: 14px; color: red;">Size:(150 X 150px)</h6></label></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image1" id="p_img">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top"
                                                style="height: 150px; width: 150px; background-color: black;"
                                                src="{{ asset('Backend/images/header/' . $header->image1) }}"
                                                alt="{{$header->alt_tag}}"><br><br>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Fac icon Alt Tag</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="alt_tag1" id="p_name"
                                                placeholder="Enter Alt Tag" value="{{$header->alt_tag1}}">
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
