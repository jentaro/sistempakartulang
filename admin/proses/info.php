<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM info");
foreach ($data as $row) {
    echo "
        <table>
            <tr>
                <td width=1000px>
                    <h3>" . $row['judul'] . "</h3>	
                </td>
                <td colspan=2>
                    <h3>Action</h3>
                </td>
            </tr>
            <tr>
                <td>
                " . $row['isi'] . "
                </td>
                <td width=70px>
                    <a href='editinfo.php?id=$row[id]'> Edit </a>
                </td>
                <td width=70px>
                    <a href='proses/deleteinfo.php?id=$row[id]'> Delete </a>
                </td>
            </tr>
        </table>
        <hr>
";
};
?>