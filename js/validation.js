 var emailFlag = 2;
    var userFlag = 2;
    function submitt()
    {
      var fname, lname, phone, email, pass , rePass;
      var fnameErr, lnameErr, phoneErr, emailErr, passErr, rePassErr, unameErr, conEmailErr, dobErr,countryErr, addressErr, stateErr, nidErr, zipErr;
      fnameErr = lnameErr = phoneErr = emailErr = passErr = rePassErr = unameErr = conEmailErr = "";
      var valid = 0;
      var flag = 1;
      nameVal = /^[a-zA-Z\s]*$/;
      userVal = /^[a-zA-Z0-9]*$/;
      numVal = /^[0-9]*/;
      emailVal = /^\S+@\S+\.\S+/; 
      //passVal = /^[A-Z][a-zA-Z]*[#?!@$%^&*-]*.{8,}$/;
      passVal = /^[a-zA-Z0-9]*$/;
      addressVal = /^\d+\s[A-z]+\s[A-z]+/;
      first_name = document.getElementById('first_name').value;
      last_name = document.getElementById('last_name').value;
      user_name = document.getElementById('user_name').value;
      email = document.getElementById('email').value;
      confirm_email = document.getElementById('confirm_email').value;
      phone = document.getElementById('phone').value;
      dob = document.getElementById('dob').value;
      address = document.getElementById('address').value;
      state = document.getElementById('state').value;
      country = document.getElementById('country').value;
      zip_code = document.getElementById('zip_code').value;
      nid = document.getElementById('nid').value;
      pass = document.getElementById('password').value;
      confirm_password = document.getElementById('confirm_password').value;
      
      if(first_name != "")
      {
        if(nameVal.test(first_name))
        {
          document.getElementById('first_name').style.borderColor = "green";
        }else{
          document.getElementById('first_name').style.borderColor = "red";
          flag = 0;
          fnameErr = "First Name only Accept letter and white-space";
          //alert(fnameErr);
        }
      }else{
        fnameErr = "First Name can not be empty";
        document.getElementById('first_name').style.borderColor = "red";
        flag = 0;
      }
      
      if(last_name != "")
      {
        if(nameVal.test(last_name))
        {
          document.getElementById('last_name').style.borderColor = "green";
        }else{
          document.getElementById('last_name').style.borderColor = "red";
          flag = 0;
          lnameErr = "Last Name only Accept letter and white-space";
        }
      }else{
        lnameErr = "Last Name can not be empty";
        document.getElementById('last_name').style.borderColor = "red";
        flag = 0;
      }
      
      if(user_name != "")
      {
        if(userVal.test(user_name))
        {
          userCheck(user_name);
          document.getElementById('user_name').style.borderColor = "green";

        }else{
          document.getElementById('user_name').style.borderColor = "red";
          flag = 0;
          unameErr = "Last Name only Accept letter and white-space";
        }
      }else{
        unameErr = "Last Name can not be empty";
        document.getElementById('user_name').style.borderColor = "red";
        flag = 0;
      }
      
      if(email != "")
      {
        if(emailVal.test(email))
        {
          document.getElementById('email').style.borderColor = "green";
          emailCheck(email);
        }else{
          document.getElementById('email').style.borderColor = "red";
          flag = 0;
          emailErr = "Email invalid format";
        }
      }else{
        emailErr = "Email can not be empty";
        document.getElementById('email').style.borderColor = "red";
        flag = 0;
      }

      if(confirm_email != "")
      {
        if(email == confirm_email)
        {
          document.getElementById('confirm_email').style.borderColor = "green";
        }else{
          document.getElementById('confirm_email').style.borderColor = "red";
          flag = 0;
          emailErr = "Emails Does not match";
        }
      }else{
        conEmailErr = "Confirm Email can not be empty";
        document.getElementById('confirm_email').style.borderColor = "red";
        flag = 0;
      }

      if(phone != "")
      {
        if(numVal.test(phone))
        {
          document.getElementById('phone').style.borderColor = "green";
        }else{
          document.getElementById('phone').style.borderColor = "red";
          flag = 0;
          phoneErr = "Phone only Accept numbers";
        }
      }else{
        phoneErr = "Phone can not be empty";
        document.getElementById('phone').style.borderColor = "red";
        flag = 0;
      }

      if(dob != "")
      {
        document.getElementById('dob').style.borderColor = "green";
      }else{
        dobErr = "DOB can not be empty";
        document.getElementById('dob').style.borderColor = "red";
        flag = 0;
      }

      if(address != "")
      {
        document.getElementById('address').style.borderColor = "green";
      }else{
        addressErr = "Address can not be empty";
        document.getElementById('address').style.borderColor = "red";
        flag = 0;
      }

      if(state != "")
      {
        if(nameVal.test(state))
        {
          document.getElementById('state').style.borderColor = "green";
        }else{
          document.getElementById('state').style.borderColor = "red";
          flag = 0;
          stateErr = "State only Accept letter and white-space";
        }
      }else{
        stateErr = "State can not be empty";
        document.getElementById('state').style.borderColor = "red";
        flag = 0;
      }

      if(country != "")
      {
        if(nameVal.test(country))
        {
          document.getElementById('country').style.borderColor = "green";
        }else{
          document.getElementById('country').style.borderColor = "red";
          flag = 0;
          countryErr = "Country only Accept letter and white-space";
        }
      }else{
        countryErr = "Country can not be empty";
        document.getElementById('country').style.borderColor = "red";
        flag = 0;
      }

      if(zip_code != "")
      {
        if(numVal.test(zip_code))
        {
          document.getElementById('zip_code').style.borderColor = "green";
        }else{
          document.getElementById('zip_code').style.borderColor = "red";
          flag = 0;
          zipErr = "Zip code only Accept numbers";
        }
      }else{
        zipErr = "Zip Code can not be empty";
        document.getElementById('zip_code').style.borderColor = "red";
        flag = 0;
      }


      if(nid != "")
      {
        if(numVal.test(nid))
        {
          document.getElementById('nid').style.borderColor = "green";
        }else{
          document.getElementById('nid').style.borderColor = "red";
          flag = 0;
          nidErr = "NID code only Accept numbers";
        }
      }else{
        nidErr = "NID can not be empty";
        document.getElementById('nid').style.borderColor = "red";
        flag = 0;
      }

      if(pass != "")
      {
        if(passVal.test(pass))
        {
          document.getElementById('password').style.borderColor = "green";
        }else{
          document.getElementById('password').style.borderColor = "red";
          flag = 0;
          passErr = "Password Invalid Format";
        }
      }else{
        passErr = "Password can not be empty";
        document.getElementById('password').style.borderColor = "red";
        flag = 0;
      }
      
      if(confirm_password != "")
      {
        if(pass == confirm_password)
        {
          document.getElementById('confirm_password').style.borderColor = "green";
        }else{
          document.getElementById('confirm_password').style.borderColor = "red";
          flag = 0;
          rePassErr = "Password Does not match";
        }
      }else{
        rePassErr = "Confirm Password can not be empty";
        document.getElementById('confirm_password').style.borderColor = "red";
        flag = 0;
      }


      

      if(flag == 0)
      {
        document.getElementById("showErr").style.display = "block";
        document.getElementById('showErr').innerHTML = "<p>" + fnameErr + "<br>" + lnameErr + "<br>" + unameErr + "<br>" +  phoneErr + "<br>" + emailErr + "<br>" +  conEmailErr + "<br>" + passErr + "<br>" + rePassErr + "</p";
      }else{
        document.getElementById("showErr").style.display = "none";
      }
        
      console.log(flag);
      
      if(flag == 1 && emailFlag == 0 && userFlag == 0)
        return true;
      else
        return false;
      //return flag;
    }
    
    function postRequest(strURL, type) 
    {
      var xmlHttp;
      var flag = false;
      if (window.XMLHttpRequest) // Mozilla, Safari, ...
      { 
        var xmlHttp = new XMLHttpRequest();
      } 
      else if (window.ActiveXObject) // IE 
      { 
         var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      else
      {
        alert("your browser does not support AJAX");
        return;
      }
      xmlHttp.open('POST', strURL, true);
      xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xmlHttp.send(strURL);
      
      xmlHttp.onreadystatechange = function() 
      {
        console.log("here");
        if (xmlHttp.readyState == 4 && this.status == 200) 
        {

          //console.log(xmlHttp.responseText);
          if(xmlHttp.responseText == "true")
          {
              updatepage(type); 
          }else{
            if(type == 1)
            {
              document.getElementById("usernameChecker").style.display = "none";
              document.getElementById('user_name').style.borderColor = "green";
              userFlag = 0;
            }else{
              document.getElementById("emailChecker").style.display = "none";
              document.getElementById('user_name').style.borderColor = "green";
              emailFlag = 0;
            } 
          }
        } 
      }
      //console.log(flag);
      //return flag;
    }
    function updatepage(type)
    {
      if(type == 1)
      {
        document.getElementById("usernameChecker").style.display = "block";
        document.getElementById('user_name').style.borderColor = "red";
        document.getElementById("usernameChecker").innerHTML = "<font color='red' size='3'>" + "Username Already Exist Try another" + "</font>";
        userFlag = 1;
      }else{
        document.getElementById("emailChecker").style.display = "block";
        document.getElementById('email').style.borderColor = "red";
        document.getElementById("emailChecker").innerHTML = "<font color='red' size='3'>" + "Email Already Exist Try another" + "</font>";
        emailFlag = 1;
      }
      
      //
    }
    
    function userCheck(str)
    {
      var url="checkUsername.php?e=" + str;
      postRequest(url, 1)
      //console.log(postRequest(url));
    }

    function emailCheck(str)
    {
      var url="checkEmail.php?e=" + str;
      console.log(str);
      postRequest(url, 2)
      
      
    }

    