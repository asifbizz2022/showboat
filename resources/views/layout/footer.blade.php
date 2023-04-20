 <script src="{{ url('/') }}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ url('/') }}/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/jquery-minicolors/jquery.minicolors.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ url('/') }}/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ url('/') }}/assets/js/scripts/form-plugins.js" type="text/javascript"></script>  
        
    <script src="{{ url('/') }}/assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#summernote').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script>
        
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
              $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


            $('#example-table').DataTable({
                pageLength: 10,
                
            });

         
            $.ajax({
                url : '{{ url("/") }}/sidemenu',
                method : 'post',
                dataType : 'json',
                success : function(data){
                     

                    $.each(data , function(key, value){
                        menu = '<li>';
                            menu += '<a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-cart"></i><span class="nav-label">'+value.menu_name+'</span><i class="fa fa-angle-left arrow"></i></a>';
                            menu += ' <ul class="nav-2-level collapse">';
                            menu += '<li>';
                            menu += '<a href="{{ url('/')}}/orders">Orders</a>';
                            menu += '</li>';
                        menu += '</li>';

                        menu += '</li>';

                        $('.side-menu').append(menu);
                        console.log('-',value.menu_name); 
                         
                    });
                }
                
            });
             

        })
    </script>
    <script type="text/javascript">
        

    </script>