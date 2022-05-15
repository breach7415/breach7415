<style>
table.GeneratedTable {
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #002e5b;
  border-style: solid;
  color: #002e5b;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #ffcc00;
}
</style>
<?php include 'header.php' ?>
<section id="inner-headline">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="pageTitle">Alliances</h2>
         </div>
      </div>
   </div>
</section>
<section id="content">
   <div class="container">
      <div class="row">
	  
         <div class="col-md-12">
            <div class="about-logo">
               <h3>Alliances</h3>
			   
				<table class="GeneratedTable">
				  <?php      
					include('dbconfig.php');  
					$sql = "select * from alliance_master";
					$result = mysqli_query($conn, $sql);  
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
					{
						?><tr>
							<td rowspan='2'><img height="200px" width="300px" src="imageDirectory/<?php echo $row["Imagepath"]?>"></img></td>
							<td><?php echo $row["Title"]?></th>
						  </tr>
						  <tr>
							<td><?php echo $row["Description"]?></td>
						  </tr>
				<?php
					}
				?>
				

				  
				</table>
            </div>
         </div>
      </div>
      
   </div>
</section>
<?php include 'footer.php' ?>