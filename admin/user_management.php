<?php include "includes/header.php" ?>
<div id="layout" class="pure-g">
        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">Post List <a class="pure-button button-small button-secondary" href="post-form.html">Add New</a></h1>
                    <?php include "includes/del_user.php" ?>

                    <table class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Role</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        <tbody>
                            <?php
                                include "includes/connect_db.php" ;
                                $sql="SELECT * FROM users ORDER by id";
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
                                                <td style>
                                                    <div style='display: flex; justify-content: space-around;'> 
                                                        <a class='pure-button button-small button-success' href='post-form.html'>Edit</a>
                                                        <form action='' enctype='multipart/form-data' method='post'>
                                                            <input type='hidden' name='id' value='$row[0]'/> 
                                                            <button type='summit' name='del_user' value='Del User' class='pure-button button-small button-error'>Delete</button>
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
                    <div class="pure-menu pure-menu-horizontal">
                        <ul>
                            <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">PURE CSS</a></li>
                            <li class="pure-menu-item"><a href="http://fikiruretgeci.com" class="pure-menu-link">FIKIR URETGECI</a></li>
                            <li class="pure-menu-item"><a href="http://pure-themes.com" class="pure-menu-link">PURE THEMES</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>






