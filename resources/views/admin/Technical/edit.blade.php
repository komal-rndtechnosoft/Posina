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
                            <h3 class="m-b-10">Update Technical Specification</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('Technical')}}">Technical Specification</a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Technical Specification</a></li>
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
                        <a href="{{url('Technical')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                        <h3>Update Technical Specification</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="main" action="{{route('Technical.update', $data->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Category_Name</label>
                                        <div class="col-sm-8">
                                            <select id="categorySelect" name="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if(isset($selectedCategory) && $selectedCategory->id ==
                                                    $category->id) selected @endif>{{ $category->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Product Name</label>
                                        <div class="col-sm-8">
                                            <select id="categorySelect" name="product_id" class="form-control">
                                                @foreach($product as $p)
                                                <option value="{{ $p->id }}"
                                                    @if(isset($selectedproduct) && $selectedproduct->id ==
                                                    $p->id) selected @endif>{{ $p->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name"
                                            id="name"
                                                placeholder="Technical Specification Title" value="{{$data->name}}" required />
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="subtitle" id=""
                                                placeholder="Technical Specification Subtitle" value="{{$data->subtitle}}" required>
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
