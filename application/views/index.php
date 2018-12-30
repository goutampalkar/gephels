<html>
  <head>
<!-- <link href="<?php //echo base_url();?>assets/usr/css/font-face.css" rel="stylesheet" media="all">
 --><style>body#registerForm{ background-image:url("./assets/img/bg.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}


.register-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 50%;
  padding: 50px 70px 70px 71px;
}

.register-form .form-group {
  margin-bottom:10px;
}

 .btn.btn-log {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;

}








</style> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/validationSheet.css"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  </head>
<body id="registerForm">

<div class="container">

<div class="register-form">
  <div class="main-div">
  

 
   <form  method="POST" action="#">
 
        <div class="form-group">
        <label>NAME :-</label>    
         
          <input type="text" name="uname" class="form-control" id="uname" placeholder="Enter the your Name" pattern="[A-Za-z]*" title="Enter only Character"  required autocomplete="off">
           <span class="error">please feel requered text only..</span>  

        </div>

        <div class="form-group"> 
        <label>EMAIL :-</label>      
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter the Email"  title="Enter only Company mail address"  required autocomplete="off">   
          <span class="error">please feel requered work mail only..</span>  
   
        </div> 

        <div class="form-group"> 
        <label>PHONE :-</label>      
          <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter the your Phone Number" pattern="[0-9]{10}" title="Enter only 10 digit"  required autocomplete="off">   <span class="error">please feel requered 10 digit mobile number only..</span>    
        </div>   

        <div class="form-group"> 
        <label>AGE :-</label>      
          <input type="text" name="age" class="form-control" id="age" placeholder="Enter the your Age" pattern="[0-9]{2}" title="Enter only age"  required>  <span class="error" autocomplete="off">please feel requered age only 18+ only..</span>  
   
        </div> 
       
        <div class="form-group"> 
        <label>Date Of Birth :-</label>      
          <input type="date" name="dob" class="form-control" id="dob" placeholder="Enter the your Date of Birth" required>     
        </div>
        <span class="error">please feel requered date of birth only..</span>  
 

        <div class="form-group"> 
        <label> Address :-</label>      
          <input type="text" name="city" class="form-control" id="city" placeholder="Enter the your Address" required autocomplete="off">
          <span class="error">please feel requered text ..</span>  
     
        </div>

        <div class="form-group"> 
        <label>PACKAGE :-</label>      
         <select name="package" id="package"  class="form-control" >
          <option value="">select</option>
           <option value="1">Residential</option>
           <option value="2">non-residential</option>
         </select>   
         </div>
         <div class="form-group" id="staying"> 
          <label>Staying Days:</label>
            <select class='form-control' id="stay">
              <option>select</option>       
                   </select>
         </div>  


         <div class="form-group"> 
        <label> Workshop :-</label>      
          <input type="radio" name="workshop"  id="workshop" value="yes"><label>Yes</label>   
           <input type="radio" name="workshop" id="workshop" value="no"  ><label>No</label>     
        </div> 

        <div class="form-group" > 
          <label>cost</label>
          <span id="cost"></span>
          <input type="hidden" name="cost" id="hiddenCost" />
        
         </div> 
     
      <input type="submit" class="btn btn-log" value="register">

    </form>
    
    
</div></div></div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#package").change(function(){     
        var selectedPackage = $("#package option:selected").val();
        if(selectedPackage)
        {
          $.ajax({
              type: "POST",
              url: "index.php/Welcome/request",
              data: { package : selectedPackage } 
          }).done(function(data){
              $("#stay").html(data);
          });
         }
         else
         {
           $('#stay').html('<option value="">Select Days</option>');
         }
    });


    $("#stay").change(function(){

    
        var selectedStay = $("#stay option:selected").val();
      // alert('lkf');
        $.ajax({
            type: "POST",
            url: "index.php/Welcome/request",
            data: { stay : selectedStay } 
        }).done(function(data){
            $("#cost").html(data);
            $("#hiddenCost").val(data);
        });
    });

     $('input:radio[name=workshop]').change(function () {
       var cost = parseInt($("#hiddenCost").val());
            if ($("input[name='workshop']:checked").val() == 'yes') {
               
                var mianCost = parseInt(cost+1000);
                $("#cost").html(mianCost);
                 $("#hiddenCost").val(mianCost);

            }
            if ($("input[name='workshop']:checked").val() == 'no') {
                
                var mianCost = parseInt(cost);
                $("#cost").html(mianCost);
                 $("#hiddenCost").val(mianCost);
            }
        });

});
     
    </script>

</body>
</html>
