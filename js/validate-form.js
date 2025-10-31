 'use strict';  
      function validation()
      {
        
        var expname=/[^A-Za-z\s\.\'-]+/;
       // var expemail=/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
        var expemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var expphone=/^\d{10}$/;
               
        if($("#fullname").val().replace(/\s/g,'')=="")
        {
         
          alert("Please provide your full name.");
          $("#fullname").focus();
          return false;
        }

        if(expname.test($("#fullname").val())==true)
        {
         alert("Please provide your full name.");
         $("#fullname").focus();
          return false;
        }

        
        if($("#email").val().replace(/\s/g,'')=="")
        {
          alert("Please provide your email.");
          $("#email").focus();
          return false;
        }

        if(!expemail.test($("#email").val())==true)
        {
         alert("Please provide your valid email.");
         $("#email").focus();
          return false;
        }
       
        if($("#phone").val().replace(/\s/g,'')=="")
        {
         alert("Please provide your phone number.");
         $("#phone").focus();
          return false;
        }

        if(!expphone.test($("#phone").val())==true)
        {
         alert("Please provide your valid contact number.");
         $("#phone").focus();
          return false;
        }

        if($("#requirements").val().replace(/\s/g,'')=="")
        {
          alert("Please enter your requirements.");
          $("#requirements").focus();
          return false;
        }
        
        
        return true;
        
        
      }

      