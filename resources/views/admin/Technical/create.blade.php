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
                            <h3 class="m-b-10">Add Technical Specification</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('Technical')}}">Technical Specification</a></li>
                            <li class="breadcrumb-item"><a href="#!">Create Technical Specification</a></li>
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
                        <h3>Add Technical Specification</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{route('Technical.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Category Name</label>
                                        <div class="col-sm-8">
                                            <select id="categorySelect" name="category_id" class="form-control">
                                                <option>Select</option>
                                                @foreach($category as $c)
                                                    <option value="{{$c->id}}">{{$c->name}} </option>
                                                @endforeach
                                            </select>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                  <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Product Name</label>
                                    <div class="col-sm-8">
                                        <select id="subcategorySelect" name="product_id" class="form-control">
                                            <option>Select</option>
                                        </select>
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" id=""
                                                placeholder="Technical Specification Title" required>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="subtitle" id=""
                                                placeholder="Technical Specification Subtitle" required>
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
<!-- [ Main Content ]  -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function () {
    $('#categorySelect').on('change', function () {
        var selectedCategory = $(this).val();

        $.get('{{ route("getProductsByCategory", ['category' => ':category']) }}'.replace(':category', selectedCategory))
            .done(function (data) {
                // Success: Update the product dropdown
                $('#subcategorySelect').empty();
                $.each(data, function (key, value) {
                    $('#subcategorySelect').append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            })
            .fail(function (xhr, status, error) {
                // Failure: Log error details and display an alert
                console.error('AJAX request failed:');
                console.log('XHR object:', xhr);
                console.log('Status:', status);
                console.log('Error:', error);

                alert('Failed to fetch products. Please try again.');
            });
    });
});

</script>
@include('admin.footer')
