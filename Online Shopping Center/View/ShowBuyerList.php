<!DOCTYPE HTML>
<html>
  <head>
        

        <style>
        table, th, td 
        {
  border: 1px solid black;
  border-collapse: collapse;
  }

th, td 
{
  padding: 2px;
} 

th 
{
  text-align: left;
}

</style>



    <title>Dashboard</title>
  </head>
  <body>
    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">

      <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">



        <tr>
          <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
            <?php include 'Header2.php';?>
          </td>
        </tr>

        <tr>
          <td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
            <?php include 'Navigationbar.php';?>
          </td>

          <td>

            <table style="width: fit-content;">
              
               <h2>Buyer List</h2>

              <tr>
              <th>Buyer Name</th>
              <th>Address</th> 
              <th>Phone</th>
              <th>Email</th>
              <th>Purchased Phone Details</th>
              </tr>


             <tr>
             <td>Rajib</td>
             <td>Dhanmondi,Dhaka</td>
             <td>01897415321</td>
             <td>rajib123@gmail.com</td>
             <td>Samsung A70</td>
             </tr>



             <tr>
             <td>Niloy</td>
             <td>Uttara,Dhaka</td>
             <td>01897445451</td>
             <td>niloy123@gmail.com</td>
             <td>Samsung Galaxy S20 Ultra</td>
             </tr>



             </tr>
             <tr>
             <td>Badhon</td>
             <td>Mirpur-12,Dhaka</td>
             <td>01897458795</td>
             <td>badhon123@gmail.com</td>
             <td>Xiaomi Note 9</td>
             </tr>



             </tr>
             <tr>
             <td>Riad</td>
             <td>Newmarket, Dhaka</td>
             <td>01789415321</td>
             <td>riad123@gmail.com</td>
             <td>Huawei Mate 40</td>
             </tr>


             </tr>
             <tr>
             <td>Sayem</td>
             <td>katabon, Dhaka</td>
             <td>01798915321</td>
             <td>sayem123@gmail.com</td>
             <td>iPhone X</td>
             </tr>
             


             </tr>
             <tr>
             <td>Fuad</td>
             <td>Mohammadpur, Dhaka</td>
             <td>01897417451</td>
             <td>fuad123@gmail.com</td>
             <td>Samsung Note 20 Ultra</td>
             </tr>

             

            </table>

            <br> <br>
          </td>
        </tr>
        <tr>


          <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
            <?php include 'Footer2.php';?>
          </td>

        </tr>
      </table>
    <div>
  </body>
</html>