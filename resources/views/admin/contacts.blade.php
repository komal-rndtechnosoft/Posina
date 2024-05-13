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
                           <h3>Contacts</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/contacts')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Contact List</h4>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Contact Name</th>
                                        <th>Contact Email</th>
                                        <th>Contact Phone</th>
                                        <th>Contact Subject</th>
                                        <th>Contact Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                 @foreach($contact as $c)
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->contact_name}}</td>
                                        <td>{{$c->contact_email}}</td>
                                        <td>{{$c->contact_phone}}</td>
                                        <td>{{$c->contact_subject}}</td>
                                        <td>{{$c->contact_message}}</td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->

@include('admin.footer')
