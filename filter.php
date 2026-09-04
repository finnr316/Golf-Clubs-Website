<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'golf clubs');
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'golf clubs';

    $connection = mysqli_connect($server, $user, $password, $database);
    // check connection
    if(mysqli_connect_errno()){
      echo 'Connection error: ' . mysqli_connect_error();
    }


    //Setup SQL queries for database
    $querystring = "SELECT * FROM clubs_table";
    $uniqueQuery = "SELECT DISTINCT Club_Type FROM clubs_table ORDER BY Club_Type ASC";

    $allData = mysqli_query($connection, $querystring);
    $unique_makes = mysqli_query($connection, $uniqueQuery);

    if(mysqli_num_rows($allData) == 0) {
            echo "No results";
    }
    else{
        //change to checkboxes  website:https://bbbootstrap.com/snippets/refine-product-filter-sidebar-collapse-accordion-custom-checkbox-98247635
            echo '<form class="filterSection" method="POST">';
            echo '<select class="filterBoxes" name="club_type">';
            echo '<div class="d-flex justify-content-center">';
                echo '<div class="wrapper center-block">';
                        echo '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
                                echo '<div class="panel panel-default">';
                                        echo '<div class="panel-heading" role="tab" id="heading1">';
                                                echo '<h4 class="panel-title">';
                                                        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">';
                                                        Club Type
                                                        echo '</a>';
                                                echo '</h4>';
                                        echo '</div>';
                                        echo '<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">';
                                                echo '<div class="panel-body">';
                                                        foreach($unique_makes as $item)
                                                        {
                                                                foreach($item as $key => $value) {
                                                                        echo '<input type=checkbox class="option-input checkbox" name="filter[]" value="';
                                                                        echo $value;
                                                                        echo '">';
                                                                        echo '<span class="ml-10">'
                                                                        echo $value;
                                                                        echo '</span>'
                                                                        echo '</input>';
                                                                }
                                                        }
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">CORE i5</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">CORE i7</span>';   
                                                                echo '</label>';
                                                        echo '</div>';
                                                echo '</div>';
                                        echo '</div>';
                                echo '</div>';
                                echo '<div class="panel panel-default">';
                                        echo '<div class="panel-heading" role="tab" id="heading2">';
                                                echo '<h4 class="panel-title">';
                                                        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">';
                                                        Brand
                                                        echo '</a>';
                                                echo '</h4>';
                                        echo '</div>';
                                        echo '<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">';
                                                echo '<div class="panel-body">';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">APPLE</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">DELL</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">HP</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                echo '</div>';
                                        echo '</div>';
                                echo '</div>';
                                echo '<div class="panel panel-default">';
                                        echo '<div class="panel-heading" role="tab" id="heading3">';
                                                echo '<h4 class="panel-title">';
                                                        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">';
                                                        Screen Size
                                                        echo '</a>';
                                                echo '</h4>';
                                        echo '</div>';
                                        echo '<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">';
                                                echo '<div class="panel-body">';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">BELOW 12.9 INCH</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">12 INCH - 12.9 INCH</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">13 INCH - 13.9 INCH</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                echo '</div>';
                                        echo '</div>';
                                echo '</div>';
                                echo '<div class="panel panel-default">';
                                        echo '<div class="panel-heading" role="tab" id="heading4">';
                                                echo '<h4 class="panel-title">';
                                                        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">';
                                                        Operating System
                                                        echo '</a>';
                                                echo '</h4>';
                                        echo '</div>';
                                        echo '<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">';
                                                echo '<div class="panel-body">';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                    echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">Windows 7</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">windows 8</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">Windows 10</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                        echo '<div class="checkbox">';
                                                                echo '<label>';
                                                                        echo '<input type="checkbox" class="option-input checkbox" name="filter[]" value="12" /> <span class="ml-10">MAC OS</span>';
                                                                echo '</label>';
                                                        echo '</div>';
                                                echo '</div>';
                                        echo '</div>';
                                echo '</div>';
                        echo '</div>';
                        echo '<div class="text-right refine">';
                                echo '<button class="btn btn-out btn-primary btn-square" id="button-filter">Refine Search</button>';
                        echo '</div>'; 
                echo '</div>';
            echo '</div>';
            <input value = "ANY" selected>All</option>;
            foreach($unique_makes as $item)
            {
                foreach($item as $key => $value) {
                        echo '<input type=checkbox value="';
                        echo $value;
                        echo '">';
                        echo $value;
                        echo '</input>';
                }
            }
            echo "<input class='btn btn-out btn-primary btn-square' id='button-filter' name='filterBrand' type='submit' value='Filter'></select></form>";
        }

        if (!empty($_POST['filterBrand'])) {
                $filter_choice = $_POST["club_type"];
                if($filter_choice == "ANY"){
                        echo '<p>Any Selected</p>';
      echo "<table border=1> <tr><th>Club Type</th><th>Brand</th><th>Model</th><th>Flex</th><th>Dexterity</th><th>Price</th>";
      while($row=mysqli_fetch_array($allData, MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>";
        echo $row['Club_Type'];
        echo "</td>";
        echo "<td>";
        echo $row['Brand'];
        echo "</td>";
        echo "<td>";
        echo $row['Model'];
        echo "</td>";
                                echo "<td>";
        echo $row['Flex'];
        echo "</td>";	
                                echo "<td>";
        echo $row['Dexterity'];
        echo "</td>";
                                echo "<td>";
        echo $row['Price'];
        echo "</td>";	
        echo "</tr>";
      }
    }
                else{
                        echo '<p>Unique Club Type</p>';
                        echo "<table border=1> <tr><th>Club Type</th><th>Brand</th><th>Model</th><th>Flex</th><th>Dexterity</th><th>Price</th>";
                        while($row=mysqli_fetch_array($allData, MYSQLI_ASSOC)){
                                if($row['Club_Type'] == $filter_choice){
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $row['Club_Type'];
                                        echo "</td>";	
                                        echo "<td>";
                                        echo $row['Brand'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row['Model'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row['Flex'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row['Dexterity'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row['Price'];
                                        echo "</td>";
                                        echo "</tr>";
                                }
                        }
                echo "</table>";
                }
        }
        else{
                echo '<p>Filter not submitted</p>';
                echo "<table border=1> <tr><th>Club Type</th><th>Brand</th><th>Model</th><th>Flex</th><th>Dexterity</th><th>Price</th>";
      while($row=mysqli_fetch_array($allData, MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>";
        echo $row['Club_Type'];
        echo "</td>";
        echo "<td>";
        echo $row['Brand'];
        echo "</td>";
        echo "<td>";
        echo $row['Model'];
        echo "</td>";
                                echo "<td>";
        echo $row['Flex'];
        echo "</td>";	
                                echo "<td>";
        echo $row['Dexterity'];
        echo "</td>";
                                echo "<td>";
        echo $row['Price'];
        echo "</td>";	
        echo "</tr>";
      }
                echo "</table>";
        }
        mysqli_close($connection);
        echo"</div>";



?>