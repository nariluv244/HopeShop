  <!-- Core Vendors JS -->
  <script src="{{asset('admin/assets/js/vendors.min.js')}}"></script>

<!-- page js -->
<script src="{{asset('admin/assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/dashboard-crm.js')}}"></script>
<script src="{{asset('admin/assets/vendors/select2/select2.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@toastr_js
@toastr_render
<script>
    $('.datepicker-input').datepicker()
    $('.select2').select2({
        placeholder: 'Select an option'
    });
    
    $('#data-table').DataTable();

</script>
