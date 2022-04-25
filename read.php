<style>
  table {
    width: 100%;
    font-family: sans-serif;
    display: flex;
    flex-direction: column;
    margin-top: 5rem;
    align-items: center;
  }

  th,
  td {
    padding: 15px;
  }

  th,
  td {
    border: 1px solid black
  }

  td {
    height: 50px;
    vertical-align: center;
  }

  tr:hover {
    background-color: lightgreen;
    color: white;
  }

  th {
    background-color: #4CAF50;
    color: white;
  }
  a{
    text-decoration: none;}
  p{
    text-align: center;
  }
</style>
<?php
include "db.php";

$sql = "select * from shopping";
$query = $connect->prepare("SELECT * FROM shopping");
$query->execute();
echo "
<table>
    <tr>
        <th>Name</th>
        <th>Money</th>
        <th>Location</th>
        <th>Category</th>
        <th>Image</th>
        <th colspan='2'>Action</th>
    </tr>
";
while ($rows = $query->fetch()) {
  echo "
    <tr>
        <td>" . $rows["name"] . "</td>
        <td>" . $rows["money"] . "</td>
        <td>" . $rows["location"] . "</td>
        <td>" . $rows["category"] . "</td>
        <td><img src=". $rows['image'] ." title=".$rows['name']." width='100' height='100' ></td>

        <td><a href='edit-form.php?thisID=" . $rows["id"] . "
        &prod_name=" . $rows["name"] . "&money=" . $rows["money"] . "
        &location=" . $rows["location"] . "&category=" . $rows["category"] . "'>Update</a></td>
        
        <td><a href='delete.php?thisID=" . $rows['id'] . "'> Delete </a>
    </tr>
    ";
}
echo "</table>";
echo "<hr>";
echo "<a href='form.php'><p>Add More Data</p></a>";
?>