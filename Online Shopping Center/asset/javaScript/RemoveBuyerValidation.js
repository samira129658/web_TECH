function validateForm() {
				
				var buyerid = document.getElementById('buyerid').value;
				
				var flag1=true;
				
             
				console.log(name);


				if(buyerid == "") 
				{
					document.getElementById('errorMsgBuyerid').innerHTML = "Buyer ID is empty";
					document.getElementById('errorMsgBuyerid').style.color = "red";
					//return false;
					flag1 = false;	
				}
				
				

				
				if(flag1==true){
					return true;
				}
				else{
					return false;
				}
				
				
			}