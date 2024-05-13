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
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a></li>
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
                                    <div class="form-group">
                                        <label for="product">Category Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Category Name" name="cat_name">
                                    </div>
                                    <br>
                                    <div class="form-group" type="hidden">
                                        <label for="product">Slug</label>
                                        <input type="text" class="form-control" placeholder="Enter Slug" name="slug">
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
@include('admin.footer')
