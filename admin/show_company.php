<?php
$page_title = "Show Company ";
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
            <h1>Company</h1>

            <br/>
            <?php
            if (isset($_SESSION['company'])) {
                echo $_SESSION['company'];
                unset($_SESSION['company']);
            }
            ?>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Actions</th>

                </tr>


                <?php
                $sql = "select * from company";
                $result = mysqli_query($conn, $sql);
                if ($result && $result->num_rows > 0) {
                    while ($company= $result->fetch_assoc()) {
                        echo "<tr>";

                        $id = $company['id'];
                        $name = $company['name'];
                        $number = $company['number'];
                        $contact = $company['contact'];
                        $email = $company['email'];
                        $address = $company['address'];
                        $age = $company['age'];

                        echo "<td> $id </td>";
                        echo "<td> $name </td>";
                        echo "<td> $number </td>";
                        echo "<td> $contact </td>";
                        echo "<td> $email </td>";
                        echo "<td> $address </td>";
                        echo "<td> $age </td>";
                        echo "
                           <td>
                        <a href=\"delete_company.php?id=$id\" class=\"btn-danger\"> delete </a>&nbsp;

                    </td>
                        ";
                        echo "</tr>";
                    }
                } else {
                    echo "
            <tr>
                <td>
                    <p> no Company yet ! </p>
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