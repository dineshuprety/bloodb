<?php
$sql = "SELECT * FROM blood_donor WHERE total_donation >= 5 limit 3";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $i = 0;
    echo "<div class='table-responsive '><table class='table table-striped table-bordered'>
                   <p> <B>Top Donar List</p>
                   <tr class='text-primary'>	
                       <th>Sno</th>
                       <th>Picture</th>
                       <th>Blood Group</th>
                       <th>Name</th>
                       <th>Area</th>
                       <th>District</th>
                       <th>Province</th>
                       <th>Contact</th>
                   </tr>
               ";

    while ($row = $result->fetch_assoc()) {
        $sdate = $row["LAST_D_DATE"];
        $n = null;
        $date2 = date_create($sdate);
        $cdate = date_create(date("Y-m-d"));
        $days = date_diff($date2, $cdate);
        $n = $days->format("%R%a");
        if ($n > 90) {
            $i++;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td><img src='{$row["DONOR_PIC"]}' class='don_img' height='50px' width='50px'></td>";
            echo "<td>{$row["BLOOD"]}</td>";
            echo "<td>{$row["NAME"]}</td>";
            echo "<td>{$row["AREA"]}</td>";
            echo "<td>{$row["DISTRICT"]}</td>";
            echo "<td>{$row["PROVINCE"]}</td>";
            echo "<td>{$row["CONTACT_1"]}</td>";
            echo "</tr>";
        }
    }
    echo "</table></div>";
}