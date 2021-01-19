<?php include "includes/header.php" ?>
<div id="layout" class="pure-g">
        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <?php include "includes/del_origin.php" ?>
                    <h1 class="subhead">Origin Management <a class="pure-button button-small button-secondary" href="up_origin.php">Add New</a></h1>

                    <table class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        <tbody>
                            <?php
                                include "includes/connect_db.php" ;
                                $sql="SELECT * FROM origin ORDER BY id";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    while ($row=mysqli_fetch_row($result)) {
                                       
                                        echo "<tr>
                                                <td>$row[0]</td>
                                                <td>$row[1]</td>
                                                <td>
                                                <div style='display: flex; justify-content: space-around;'> 
                                                    <a class='pure-button button-small button-success' href='edit_origin.php?id=$row[0]''>Edit</a>
                                                    <form action='' enctype='multipart/form-data' method='post'>
                                                        <input type='hidden' name='id' value='$row[0]'/> 
                                                        <button type='summit' name='del_origin' value='Del Origin' class='pure-button button-small button-error'>Delete</button>
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

                        <tbody>
                       
                        
                        </tbody>
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






