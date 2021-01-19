<?php include "includes/header.php" ?>
<div id="layout" class="pure-g">
        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">
                <div class="items">
                    <?php include "includes/del_singer.php" ?>
                    <h1 class="subhead">singer management <a class="pure-button button-small button-secondary" href="up_singer.php">Add New</a></h1>

                    <table class="pure-table pure-table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Origin</th>
                                <th>Action</th>
                                <tbody>
                                    <?php 
                                        include "includes/connect_db.php";
                                        $get_singer = "select * from singer";
                                        $run_singer = mysqli_query($conn, $get_singer);
                                        while($row_singer = mysqli_fetch_array($run_singer)){
                                          $singer_id = $row_singer['id']; 
                                          $singer_title = $row_singer['name'];
                                          $singer_origin= $row_singer['origin_id']; 
                                          $get_origin_info = mysqli_query($conn, "SELECT * FROM origin where id = $singer_origin");
                                            if ($get_origin_info) {
                                                while($row=mysqli_fetch_row($get_origin_info)){
                                                     $origin_name = $row[1];
                                                }
                                                mysqli_free_result($get_origin_info);
                                            }
                                          echo "
                                                  <tr>
                                                    <td>$singer_id</td>
                                                    <td>$singer_title</td>
                                                    <td>$origin_name</td>
                                                    <td>
                                                        <div style='display: flex; justify-content: space-around;'> 
                                                            <a class='pure-button button-small button-success' href='post-form.html'>Edit</a>
                                                            <form action='' enctype='multipart/form-data' method='post'>
                                                                <input type='hidden' name='id' value='$singer_id'/> 
                                                                <button type='summit' name='del_singer' value='Del Singer' class='pure-button button-small button-error'>Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                  </tr>
                                          ";
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






