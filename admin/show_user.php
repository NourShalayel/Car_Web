<?php
$page_title = "manage admin";
include "partial/menu_admin.php";
include "../config/connection.php";
?>
    <title>Employee leave management system |  Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Users</h1>

            <br/>
            <?php
            if (isset($_SESSION['user'])) {
                echo $_SESSION['user'];
                unset($_SESSION['user']);
            }
            ?>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Username</th>
                    <th>PhoneNumber</th>
                    <th>Actions</th>
                </tr>


                <?php
                $sql = "select * from user";
                $result = mysqli_query($conn, $sql);
                if ($result && $result->num_rows > 0) {
                    while ($admin = $result->fetch_assoc()) {
                        echo "<tr>";

                        $id = $admin['id'];
                        $userName = $admin['username'];
                        $phoneNumber = $admin['phone_number'];

                        echo "<td> $id </td>";
                        echo "<td> $userName </td>";
                        echo "<td> $phoneNumber </td>";
                        echo "
                           <td>
                        <a href=\"delete_user.php?id=$id\" class=\"btn-danger\" > Delete </a>&nbsp;

                    </td>
                        ";
                        echo "</tr>";
                    }
                } else {
                    echo "
            <tr>
                <td>
                    <p> no User yet ! </p>
                </td>
            </tr>
               ";
                }
                ?>


            </table>

        </div>
    </div>
    <!-- Main Content Setion Ends -->
<?php
?>