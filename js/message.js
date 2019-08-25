        function postRequest(strURL) 
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
				//console.log("here");
				if (xmlHttp.readyState == 4 && this.status == 200) 
				{
                    updatepage(xmlHttp.responseText);
				}	
			}
			//console.log(flag);
			//return flag;
        }
        
        function postRequestmsg(strURL) 
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
				//console.log("here");
				if (xmlHttp.readyState == 4 && this.status == 200) 
				{
                    document.getElementById("msgtext").value = '';
				}	
			}
			//console.log(flag);
			//return flag;
		}
		function updatepage(msg)
		{
		
				document.getElementById("showmsg").innerHTML = msg;
				
        
		}
		
		function fetchmsg(partner, user)
		{
            var url="msgajax.php?p=" + partner+"&u=" + user;
            console.log(url);
			postRequest(url)
			
        }
        function sendmsg(partner, user, msg)
		{
            var url="sendMessage.php?p=" + partner+"&u=" + user + "&m=" + msg;
            console.log(url);
            postRequestmsg(url)
            fetchmsg(partner, user)
		}