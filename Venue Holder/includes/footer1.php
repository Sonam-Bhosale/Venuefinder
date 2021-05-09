<!-- Begin Page Footer-->
<footer>
                        
                        </footer>
    <!-- End Page Footer -->
     <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
      <!-- Begin Vendor Js -->
      <script src="../layout/assets/vendors/js/base/jquery.min.js"></script>
      <script src="../layout/assets/vendors/js/base/jquery.ui.min.js"></script>
            <script src="../layout/assets/vendors/js/base/core.min.js"></script>
            <!-- End Vendor Js -->
            
            <!-- Begin Page Vendor Js -->
            <script src="../layout/assets/vendors/js/nicescroll/nicescroll.min.js"></script>
            <script src="../layout/assets/vendors/js/app/app.min.js"></script>
            <script src="../layout/assets/vendors/js/lity/lity.min.js"></script>
            <script src="../layout/assets/vendors/js/calendar/moment.min.js"></script>
            <script src="../layout/assets/vendors/js/calendar/fullcalendar.min.js"></script>
            <!-- End Page Vendor Js -->

             <!-- Begin Page Snippets -->
             <script src="../layout/assets/js/pages/events.min.js"></script>
               <!-- JavaScript -->
                <script src="../layout/assets/js/alertify.min.js"></script>
                <script src="../layout/assets/js/alertify.js"></script>
                <!-- include the style -->
                <!-- <script src="../layout/assets/js/components/tabledit/tabledit.js"></script> -->
                <script src="../layout/assets/js/components/tables/tables.js"></script> -->
    
                <link rel="stylesheet" href="../layout/assets/js/alertify.min.css" />
                <!-- include a theme -->
                <link rel="stylesheet" href="../layout/assets/js/default.min.css" />
            <!-- End Page Snippets -->
            <script>
                $(document).on('click', '[data-lightbox]', lity);
            </script>
            <!-- End Page Snippets -->
            <script>
                function onlyAlphabets(e,t)
              {
                try {
                    if (window.event) { var charCode = window.event.keyCode; }
                    else if (e)
                              { var charCode = e.which;}
                    else { return true;}
                    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||(charCode ==32))
                            {  return true; }		
                    else
                      alertify.success("This is required only Alphabets!!");
                                return false;
                }
                catch (err) {
                    alert(err.Description);
                }
            }
            function isNumberKey1(evt)
            {
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))
             {    
              alertify.success("This is required only numbers!!");
                    return false;
             }
               return true;
          }
          
                $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
        </script>