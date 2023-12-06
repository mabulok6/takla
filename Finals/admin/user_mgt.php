<?php
    include "../plugins/bootstrap.php";
    include "../config/db_conn.php";
    include "../plugins/glyph.php";
    session_start();
	
	
?>

<html>
<head>
    <title>User Management</title>
    <?php include "../plugins/bootstrap.php"; ?>
</head>
<body>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: cyan;">
    USERS MANAGEMENT
</nav>

<div class="container">

    <table class="table table-hover text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Firstname</th>
            <th>Lastname</th>
			<th>Status</th>
            <th>Position</th>

        </tr>
        </thead>
        <tbody>
		
		<form action="../config/insert.php" method="POST">
		
		<tr>		
            <td></td>
            <td><input type="text" name="username" required></td>
            <td><input type="text" name="password" required></td>
			<td><input type="text" name="Fname" required></td>
			<td><input type="text" name="Lname" required></td>
			<td><input type="text" name="status"></td>
			
            <td><select name="position" required>
				 <option>1</option>
				 <option>2</option>
				 <option>3</option>
				 </select></td>
            <td>
                <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus">ADD</span>
                </button>
            </td>
        </tr>
		
		<?php
			  $sql = "SELECT * FROM users where status='Active'";
			  $result = $conn->query($sql);
			  while($row=$result->fetch_assoc()){
				  
			  ?>
			  
			   <tr>
				<td><?=$row ['userID']?></td>
				<td><?=$row ['username']?></td>
				<td><?=$row ['password']?></td>
				<td><?=$row ['Fname']?></td>
				<td><?=$row ['Lname']?></td>
				<td><?=$row ['status']?></td>
				<td><?=$row ['position']?></td>
				<td><??></td>
				
				<Form Method="POST" action="../config/ArchiveUser.php">
				
				<td>
					<input type="hidden" name="userID" value="<?=$row['userID']?>">
					<button>Arch</button>
				</td>
			  </tr>
			   <?php
			  
			  	  }
			  
			  ?>
        </tbody>
    </table>
</div>

</body>
</html>