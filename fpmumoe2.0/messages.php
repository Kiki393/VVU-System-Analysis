<?php include 'db_connect.php'; ?>
<div class="col-md-12">
    <div class="card card-outline card-success">
        <div class="card-header">
            <b>All Messages</b>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive" id="printable">
                <table class="table m-0 table-bordered">
                    <!--  <colgroup>
                       <col width="5%">
                       <col width="30%">
                       <col width="35%">
                       <col width="45%">
                     </colgroup> -->
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    </thead>
                    <tbody>
                    <?php
                    $query = "select * from messages ORDER BY ID";
                    $result = mysqli_query($conn, $query);
                        ?>
                        <tr>
                            <?php

                            while($row = mysqli_fetch_array($result))
                            {
                            ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["message"]; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>