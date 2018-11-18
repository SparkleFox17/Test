<style>
body{
  background-color: purple;
}
#formBody{
  background-color: green;
}
#formTable{
  width: 100%;
  color: white;
}
.backbtn{

}
</style>
<?php
echo "<div id='formBody'>";

echo "<a class='backbtn' href='index.html'>BACK</a>";

echo "<table id='formTable'>
        <tr>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
        </tr>
        <tr>
          <td>".$_POST['fname']."</td>
          <td>".$_POST['lname']."</td>
        </tr>
      </table>";

echo "</div>";
?>
