<?php include "includes/header.php" ?>
<div id="layout" class="pure-g">
        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <?php include "includes/del_product.php" ?>
                    <h1 class="subhead">Product management <a class="pure-button button-small button-secondary" href="up_product.php">Add New</a></h1>
                    <table class="pure-table pure-table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Singer</th>
                                <th>Name</th>
                                <th>Price old</th>
                                <th>Price current</th>
                                <th>Discount</th>
                                <th>Audio</th>
                                <th>Image</th>
                                <th>Descriptions</th>
                                <th>Keyword</th>
                                <th>Action</th>
                                <tbody>
                                    <?php
                                        include "includes/connect_db.php" ;
                                        $sql="SELECT * FROM product ORDER BY id";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result) {                                       
                                            while ($row=mysqli_fetch_row($result)) {
                                               
                                                echo "<tr>
                                                        <td>$row[0]</td>
                                                        <td>$row[1]</td>
                                                        <td>$row[2]</td>
                                                        <td>$row[3]</td>
                                                        <td>$row[4]</td>
                                                        <td>$row[5]</td>
                                                        <td>$row[6] %</td>
                                                        <td><audio controls src='audio_product/$row[7]'></audio></td>
                                                        <td><img src='image_product/$row[8]' alt='pro_img' width = '50px'></td>
                                                        <td>$row[9]</td>
                                                        <td>$row[10]</td>
                                                        <td >
                                                            <div style='display: flex; justify-content: space-around;'> 
                                                                <a href= 'edit_product.php?id=$row[0]' class='pure-button button-small button-success'>Edit</a>
                                                                <form action='' enctype='multipart/form-data' method='post'>
                                                                    <input type='hidden' name='id' value='$row[0]'/> 
                                                                    <button type='summit' name='del_product' value='Del Product' class='pure-button button-small button-error'>Delete</button>
                                                                 </form>
                                                             </div>
                                                        </td>
                                                      </tr>";
                                            }                                           
                                            mysqli_free_result($result);
                                        }
                                    ?>
                                </tbody>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="navigation">
                    <div class="pure-button-group">
                        <a href="#" class="pure-button">Prev</a>
                        <a href="#" class="pure-button">Next</a>
                    </div>
                </div>

                <div class="footer">
                    
                </div>
            </div>
        </div>
    </div>






