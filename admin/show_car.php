<?php
$page_title = "Show Car ";
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
            <h1>Cars</h1>

            <br/>
            <?php
            if (isset($_SESSION['car'])) {
                echo $_SESSION['car'];
                unset($_SESSION['car']);
            }
            ?>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Price_Per_Day</th>
                    <th>Price_Per_KM</th>
                    <th>Company_name</th>
                    <th>Actions</th>

                </tr>


                <?php
                $sql = "select * from car";
                $result = mysqli_query($conn, $sql);
                if ($result && $result->num_rows > 0) {
                    while ($car= $result->fetch_assoc()) {
                        echo "<tr>";

                        $id = $car['id'];
                        $name = $car['name'];
                        $model = $car['model'];
                        $color = $car['color'];
                        $image = $car['image'];
                        $price_per_day = $car['price_per_day'];
                        $price_per_km = $car['price_per_km'];
                        $company_name = $car['company_name'];

                        echo "<td> $id </td>";
                        echo "<td> $name </td>";
                        echo "<td> $model </td>";
                        echo "<td> $color </td>";

                        echo "<td> $price_per_day </td>";
                        echo "<td> $price_per_km </td>";
                        echo "<td> $company_name </td>";
                        echo "
                           <td>
                        <a href=\"delete_car.php?id=$id\" class=\"btn-danger\"> delete </a>&nbsp;

                    </td>
                        ";
                        echo "</tr>";
                    }
                } else {
                    echo "
            <tr>
                <td>
                    <p> no Car yet ! </p>
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