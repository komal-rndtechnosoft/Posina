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
                            <h3 class="m-b-10">Update About</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('About')}}">About</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update About</a></li>
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
                        <a href="{{url('About')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update About</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="main" action="{{route('About.update', $data->id)}}" method="POST"
                                    enctype="multipart/form-data">

                                     {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Title" value="{{$data->title}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Subtitle</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="subtitle"
                                                placeholder="Enter Title" value="{{$data->subtitle}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea class="textarea" rows="3" cols="50" type="text" name="description"
                                                class="form-control"
                                                placeholder="Enter Description">{{$data->description}}</textarea>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Counter1</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="counter1"
                                                placeholder="Enter counter" value="{{$data->counter1}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">CounterTitle1</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="countertitle1"
                                                placeholder="Enter counter" value="{{$data->countertitle1}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Counter2</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="counter2"
                                                placeholder="Enter counter" value="{{$data->counter2}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">CounterTitle2</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="countertitle2"
                                                placeholder="Enter counter" value="{{$data->countertitle2}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Counter3</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="counter3"
                                                placeholder="Enter counter" value="{{$data->counter3}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">CounterTitle3</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="countertitle3"
                                                placeholder="Enter counter" value="{{$data->countertitle3}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Counter4</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="counter4"
                                                placeholder="Enter counter" value="{{$data->counter4}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">CounterTitle4</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="countertitle4"
                                                placeholder="Enter counter" value="{{$data->countertitle4}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Description1</label>
                                        <div class="col-sm-8">
                                            <textarea class="textarea" rows="3" cols="50" type="text"
                                                name="description1" class="form-control"
                                                placeholder="Enter Description">{{$data->description1}}</textarea>
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
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img class="img-fluid card-img-top"
                                                style="height: 150px; width: 150px; background-color: black;"
                                                src="{{ asset('Backend/images/about/' . $data->image) }}"
                                                alt="{{$data->alt_tag}}"><br><br>
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
