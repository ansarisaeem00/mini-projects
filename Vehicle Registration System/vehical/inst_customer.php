  
    <?php ?>
    <table class="table-striped table table-bordered table-hover table-condence">

    <form class="form-action" action="dbentry.php" method="post">

      <tr>
        <td><label>Customer Name</label></td>
        <td><input type="text" name="cust_name" placeholder="cust_name"></td>
      </tr>


      <tr>
        <td><label>Aadhar no </label></td>
        <td><input type="text" name="Aadhar_no" placeholder="Aadhar_no"></td>
      </tr>


      <tr>
        <td><label>Contact no</label></td>
        <td><input type="text" name="Contact" placeholder="Contact"></td>
      </tr>


      <tr>
        <td><label>State</label></td>
        <td>
          <select id="state" name="state">
            <option value="Maharashtra"> Maharashtra</option>
          
            <option value="UttarPradesh"> Uttar-Pradesh</option>
            
            <option value="Kerala"> Kerala</option>

            <option value="Gujrat"> Gujrat</option>
          
          </select>
      
        </td>
      </tr>


      <tr>
        <td><label>City</label></td>
        <td><input type="text" name="City" placeholder="City"></td>
      </tr>


      <tr>
        <td><label>Pincode</label></td>
        <td><input type="text" name="Pincode" placeholder="Pincode"></td>
      </tr>
      <tr>
        <td><label>Vehicle Id</label></td>
        <td><input type="text" name="vehicle_id" placeholder="Vehicle Id"></td>
      </tr>
      <tr>
        <td>
      <input type="submit" name="ins_cust">
      <td>
      </tr> 
    </form> 
    </table>  
