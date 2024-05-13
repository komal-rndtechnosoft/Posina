	<!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{asset('admin/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/ripple.js')}}"></script>
    <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{asset('admin/assets/js/plugins/apexcharts.min.js')}}"></script>


    <!-- custom-chart js -->
    <script src="{{asset('admin/assets/js/pages/dashboard-main.js')}}"></script>
    </body>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
<script>
    // Initialize the editors array
    window.editors = [];

    document.querySelectorAll('.textarea').forEach((node, index) => {
        ClassicEditor
            .create(node, {
                autoFormat: false,
                contentFilter: false, // Disable content filtering
            })
            .then(newEditor => {
                window.editors[index] = newEditor;
            });
    });
</script>

    </html>
