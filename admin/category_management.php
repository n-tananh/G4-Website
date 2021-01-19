<?php include "includes/header.php" ?>
<div id="layout" class="pure-g">
        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <?php include "includes/del_category.php" ?>
                    <h1 class="subhead">Post List <a class="pure-button button-small button-secondary" href="up_category.php">Add New</a></h1>
                    <table class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>

                        <tbody>
                            <?php
                                include "includes/connect_db.php" ;
                                $sql="SELECT * FROM category ORDER BY id";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
                                    // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
                                    while ($row=mysqli_fetch_row($result)) {
                                       
                                        echo "<tr>
                                                <td>$row[0]</td>
                                                <td>$row[1]</td>
                                                <td>
                                                    <div style='display: flex; justify-content: space-around;'> 
                                                        <a class='pure-button button-small button-success' href='post-form.html'>Edit</a>
                                                        <form action='' enctype='multipart/form-data' method='post'>
                                                            <input type='hidden' name='id' value='$row[0]'/> 
                                                            <button type='summit' name='del_category' value='Del Category' class='pure-button button-small button-error'>Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                              </tr>";
                                    }
                                    // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
                                    // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
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






