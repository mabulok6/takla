<?php
include "../config/dbcon.php";

session_start();

// Restriction
$on = $_SESSION['on'];
$admin = $_SESSION['admin'];

if (!$admin || !$on) {
    header("location: ../index.php");
    exit;
}
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body  style="background-color:silver">

<nav class="navbar navbar-expand-sm bg-info navbar-light ">
    <div class="container-fluid d-flex justify-content-center">
        <ul class="navbar-nav ">
		
		
			
            <li class="nav-item">
                <a class="nav-link active text-light" href="../inventory/inventory.php">Inventory</a>
            </li>
			
			
            <li class="nav-item">
                <a class="nav-link text-light" href="../cashier/cashier.php">Cashier</a>
            </li>	
			
            <li class="nav-item">
                <a class="nav-link text-light" href="../manager/manager.php">Manager</a>
            </li>
			
			
            <li class="nav-item">
                <a class="nav-link text-light" href="../index.php">Log Out</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid mt-3">



    <div class="tab-content">
        <!--NAV 1 START-->
        <div id="home" class="container tab-pane active"><br>
            <h4>Active</h4>

            <table class="table table-light  ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Position</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <!-- Your form for inserting data -->
                <form method="POST" action="../config/update.php">
                    <tr>
                        <!-- Input fields for insertion -->
                        <td></td>
                        <td><input class="form-control" type="email" name="username"></td>
                        <td><input class="form-control" type="password" name="password"></td>
                        <td><input class="form-control" type="firstname" name="firstname"></td>
                        <td><input class="form-control" type="lastname" name="lastname"></td>
                        <td>
                            <select class="form-select" id="position" name="position">
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                                <option value="3">Inventory Clerk</option>
                                <option value="4">Cashier</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select" id="status" name="status">
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                        </td>
                        <td><button type="submit" class="btn btn-warning" name="insert">ADD</button></td>
                    </tr>
                </form>

                <?php
                // Fetching and displaying data
                $sql = "select * from users where status =1";
				$res = $conn->query($sql);
                while ($rows = $res->fetch_assoc()) {
                    $id = $rows['userID'];
                    $username = $rows['username'];
                    $password = $rows['password'];
                    $firstname = $rows['Fname'];
                    $lastname = $rows['Lname'];
                    $position = $rows['position'];

                    echo "
                    <tr>
                      <td>$id</td>
                      <td>$username</td>
                      <td>$password</td>
                      <td>$firstname</td>
                      <td>$lastname</td>
                      <td>$position</td>
                      <td><button class='btn btn-primary'><a class='form-control nav-link' href='../config/update.php?upd=$id'>Update</a></button></td>
                      <td><button class='btn btn-primary'><a class='form-control nav-link' href='../config/update.php?arch=$id'>Archive</a></button></td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>

            <!--NAV 2 START-->
            <h4 >Trash</h4>
            <table class="table table-warning ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Position</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                // Fetching and displaying archived data
                $sql = "select * from users where status =0";
                $res = $conn->query($sql);
                while ($rows = $res->fetch_assoc()) {
                    $id = $rows['userID'];

                    echo "
                    <tr>
                      <td>$rows[userID]</td>
                      <td>$rows[username]</td>
                      <td>$rows[password]</td>
                      <td>$rows[Fname]</td>
                      <td>$rows[Lname]</td>
                      <td>$rows[position]</td>
                      <td><button class='btn btn-primary'><a class='form-control nav-link' href='../config/update.php?get=$id'>RETRIEVE</a></button></td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>

<?php

?>