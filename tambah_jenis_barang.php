<?php
include("config.php");
include("header.php");
 ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="name" data-editable="true">Nama</th>
                                    <th data-field="action">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                                $sql = "SELECT * FROM jenis_barang";
                                                $query = mysqli_query($db, $sql);

                                                while($item = mysqli_fetch_array($query)){
                                                    echo"<tr>";
                                echo "<td>".$item['id_jenis_barang']."</td>";
                                echo "<td>".$item['nama']."</td>";
                                echo "<td>";
                                    echo "<a href='edit_jenis_barang.php?id=".$item['id_jenis_barang']."'>Edit</a> | ";
                                    echo "<a href='delete_jenis_barang.php?id=".$item['id_jenis_barang']."'>Delete</a>  ";
                                    echo "</td>";
                                echo "</tr>";
                                }
                                ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->

<?php
       include("footer.php");

        ?>