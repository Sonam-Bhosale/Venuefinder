<!-- Begin Page Footer-->
<footer>

</footer>
<!-- End Page Footer -->
<a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

<!-- Begin Vendor Js -->
<script src="../layout/assets/vendors/js/base/jquery.min.js"></script>
<script src="../layout/assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->

<script src="../layout/assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="../layout/assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
<script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
</script>
<!-- Data table  -->

      <script src="../layout/assets/vendors/js/datatables/datatables.min.js"></script>
        <script src="../layout/assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
        <script src="../layout/assets/vendors/js/datatables/jszip.min.js"></script>
        <script src="../layout/assets/vendors/js/datatables/buttons.html5.min.js"></script>
        <script src="../layout/assets/vendors/js/datatables/pdfmake.min.js"></script>
        <script src="../layout/assets/vendors/js/datatables/vfs_fonts.js"></script>
        <script src="../layout/assets/vendors/js/datatables/buttons.print.min.js"></script>
<!-- End Datable -->
<!-- Begin Page Snippets -->
  <script src="../layout/assets/js/alertify.min.js"></script>
<script src="../layout/assets/js/alertify.js"></script>
<!-- include the style -->
<!-- <script src="../layout/assets/js/components/tabledit/tabledit.js"></script> -->
<script src="../layout/assets/js/components/tables/tables.js"></script> 

<link rel="stylesheet" href="../layout/assets/js/alertify.min.css" />
<!-- include a theme -->
<link rel="stylesheet" href="../layout/assets/js/default.min.css" />
<!-- End Page Snippets -->
    </body>
</html>
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
		function onLeave()
		{
			var input = document.getElementById("user_name");  
          var string = input.value; 
          input.value = string.charAt(0).toUpperCase() + 
           string.slice(1);
        var input = document.getElementById("venue_name");  
          var string = input.value; 
          input.value = string.charAt(0).toUpperCase() + 
           string.slice(1); 
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
      function callfunction()
        {
            var textBox = document.getElementById("pass");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<=6)
                {
                  alertify.success('Please entered more than 6 characters for password');
                }
        }
        function validate()
        {
            var textBox = document.getElementById("number");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<10)
                {
                  alertify.success('Please entered 10 numbers');
                }
            var txtmobile= document.getElementById("number").value;
            var dbmobile= document.getElementById("mobile").value;
              if(txtmobile==dbmobile)
              {
                  alertify.success('Number Already Registered!!! Please Enter Another Number');
             }
        }
        function showfocus(element) 
        {
                max = parseInt(element.dataset.max)
                if (element.value.length >= max) 
                {
                    document.getElementById("landline").focus();  
                }
        }
        function check()
            {
                var pass=document.getElementById('pass').value;
                var cpass=document.getElementById('cpass').value;
                var plength=length.pass;
                var clength=length.cpass;
                if(plength!= clength || pass!=cpass)
                {
                   //alertify.success('Password do not match');
                }
                else
                {
                    alertify.success('Password is matched'); 
                }
            }
            $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
      var event_name=document.getElementById('venue_name').value;
      if(event_name=='Select Venue')
      {
          document.getElementById('error').innerHTML='Please Select Venue Name';
      }
      else
         { document.getElementById('error').innerHTML='';}

</script>