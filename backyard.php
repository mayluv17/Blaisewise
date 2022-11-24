 <form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sort by Year</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="year">
    <option selected>Choose Year...</option>
    
    <?php $yr= 2020; 
	  while ($yr>=2019){
		  
		  echo "
    <option value=\"$yr\">$yr</option>";
   $yr--;
	  
	  }
    ?>
    
  </select>

  <button type="submit" class="btn my-1 btn-warning">Submit</button>
</form>
 
 
 
 

 <table class="table table-striped table-dark">
 
  <thead>
    <tr>
      <th scope="col"># </th>
      <th scope="col">Name</th>
      <th scope="col">Votes</th>
      
    </tr>
 </thead>
  <tbody>
   
    <?php 
	  $year = $_GET['year'];
	  $result= mysqli_query($con, "SELECT c.name, SUM(v.vcount) AS votes FROM vote_counter v
LEFT JOIN cont_user c ON v.cont_id=c.foucid
WHERE v.year='$year'
GROUP BY v.cont_id") or die(mysqli_error($con));
$num = 0;
while ($row = mysqli_fetch_array($result))
{ 
	$num++;
   //$vtcount= $row['total'];
	echo "<tr>
      <th scope=\"row\">$num</th>
      <td>$row[name]</td>
      <td>$row[votes]</td>
    </tr>";
	//echo $row["votes"];
}
	?>  
    
  </tbody>
</table>