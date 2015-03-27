<?php

$con = mysqli_connect("23.229.191.132", "patrickkill", "ilwp2000","TimeTool");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"TimeTool");
$sql="SELECT ProjectID,ProjectName FROM ProjectTableAll ORDER BY HomeScreen";
// "WHERE USERID = @User"
$result = mysqli_query($con,$sql);

echo ' <thead>
              <tr>
                <th>Project ID</th>
                <th>Project Name</th>
              </tr>
            </thead>';
            
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ProjectID'] . "</td>";
  echo "<td>" . $row['ProjectName'] . "</td>";
  echo "</tr>";
}

mysqli_close($con);

?>
