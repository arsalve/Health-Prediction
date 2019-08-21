
<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginDB</title>
    </head>
    <body>
	<?php ?>

<div>
            <td>Login Page Database</td>
         <table border="1">
		  <tr>
                <th>sr</th>
                <th>CreatedBy</th>
                <th>CreatedAt</th>
                <th>FName</th>
                <th>Uid</th>
                <th>Addre</th>
                <th>Phone</th>
                <th>Dob</th>
				<th>Mt</th>
                <th>birPla</th>  
                <th>Gender</th>
                <th>emrName</th>
                <th>emrRel</th>
                <th>emrAdd</th>
                <th>emrPhone</th>
				<th>insNo</th>
                <th>expPoDate</th>
                <th>poPro</th>
                <th>insPhone</th>
                <th>BG</th>
                <th>Alg</th>
                <th>did</th>
                <th>dName</th>
                <th>dQal</th>
                <th>dPhone</th>
                <th>dadd</th>
                <th>Hei</th>
                <th>Wei</th>
            </tr>
       <?php 
	   $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	   $sql  = "SELECT * FROM ehr";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{?>
			
            <tr>
                <td><?php echo $row['sr']; ?></td>
                <td><?php echo $row['CreatedBy']; ?></td>
                <td><?php echo $row['CreatedAt']; ?></td>
                <td><?php echo $row['FName'] ;?></td>
                <td><?php echo $row['Uid'] ;?></td>
                <td><?php echo $row['Addre'] ;?></td>
                <td><?php echo $row['Phone'] ;?></td>
                <td><?php echo $row['Dob'] ;?></td>
				<td><?php echo $row['Mt']; ?></td>
                <td><?php echo $row['birPla']; ?></td>  
                <td><?php echo $row['Gender'] ;?></td>
                <td><?php echo $row['emrName'] ;?></td>
                <td><?php echo $row['emrRel'] ;?></td>
                <td><?php echo $row['emrAdd'] ;?></td>
                <td><?php echo $row['emrPhone'] ;?></td>
				<td><?php echo $row['insNo']; ?></td>
                <td><?php echo $row['expPoDate']; ?></td>
                <td><?php echo $row['poPro']; ?></td>
                <td><?php echo $row['insPhone'] ;?></td>
                <td><?php echo $row['BG'] ;?></td>
                <td><?php echo $row['Alg'] ;?></td>
                <td><?php echo $row['did'] ;?></td>
                <td><?php echo $row['dName'] ;?></td>
                <td><?php echo $row['dQal'] ;?></td>
                <td><?php echo $row['dPhone'] ;?></td>
                <td><?php echo $row['dadd'] ;?></td>
                <td><?php echo $row['Hei'] ;?></td>
                <td><?php echo $row['Wei'] ;?></td>
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
			</div>
    </body>
</html>