function validateForm() {
				
				var buyerid = document.getElementById('buyerid').value;
				var name = document.getElementById('name').value;
				var address = document.getElementById('address').value;
				var mobile = document.getElementById('mobile').value;
				var email = document.getElementById('email').value;
				var purchasedmobile = document.getElementById('purchasedmobile').value;
				
				

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				var flag6=true;
             
				console.log(name);


				if(buyerid == "") 
				{
					document.getElementById('errorMsgBuyerid').innerHTML = "Buyer ID is empty";
					document.getElementById('errorMsgBuyerid').style.color = "red";
					//return false;
					flag1 = false;	
				}
				
				else if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "Name is empty";
					document.getElementById('errorMsgName').style.color = "red";
					//return false;
					flag2 = false;	
				}

				else if(address == "") 
				{
					document.getElementById('errorMsgAddress').innerHTML = "Address is empty";
					document.getElementById('errorMsgAddress').style.color = "red";
					//return false;	
					flag3 = false;
				}

				


				else if(mobile == "") 
				{
					document.getElementById('errorMsgMobile').innerHTML = "Mobile Number is empty";
					document.getElementById('errorMsgMobile').style.color = "red";
					//return false;	
					flag4 = false;
				}

				else if(email == "") 
				{
					document.getElementById('errorMsgEmail').innerHTML = "Email is empty";
					document.getElementById('errorMsgEmail').style.color = "red";
					//return false;	
					flag5 = false;
				}


				else if(purchasedmobile == "") 
				{
					document.getElementById('errorMsgPurchasedMobile').innerHTML = "Purchased Phone Detail Missing";
					document.getElementById('errorMsgPurchasedMobile').style.color = "red";
					//return false;	
					flag6 = false;
				}

				
				if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true){
					return true;
				}
				else{
					return false;
				}
				
				
			}