<!-- foreach loop with list function in use. -->
<?php
$emp = [
    [1, "biswajit", "manager", 5000],
    [2, "sagar", "salesman", 6000],
    [3, "basudev", "science", 4000],
    [4, "babu", "driver", 8000]
];
echo "<table border = '2px' cellspacing = '5px' cellpadding = '1px'";
echo "<tr>
<td>id</td>
<td>name</td>
<td>designation</td>
<td>salary</td>
</tr>";
foreach($emp as list($id, $name, $designation, $salary)){
    echo "<tr>
    <td>$id</td>
    <td> $name </td>
    <td>$designation</td>
    <td> $salary </td>
    </tr>";
}
 
echo "</table>";


// $emp = [
// [
//     "id" => 1,
//     "name" => "biswajit",
//     "designation" => "manager",
//     "salary" => 5000
// ],
// [
//     "id" => 1,
//     "name" => "biswajit",
//     "designation" => "manager",
//     "salary" => 5000
// ],
// [
//     "id" => 1,
//     "name" => "biswajit",
//     "designation" => "manager",
//     "salary" => 5000
// ],
// [
//     "id" => 1,
//     "name" => "biswajit",
//     "designation" => "manager",
//     "salary" => 5000
// ],
// [
//     "id" => 5,
//     "name" => "biswajit",
//     "designation" => "manager",
//     "salary" => 5000
// ]
// ];
// echo "<table border = '2px' cellspacing = '5px' cellpadding = '1px'";
// echo "<tr>
// <td>id</td>
// <td>name</td>
// <td>designation</td>
// <td>salary</td>
// </tr>";
// foreach($emp as list("id" => $id,"name" => $name,"designation" =>  $designation,"salary" => $salary)){
//     echo "<tr>
//     <td>$id</td>
//     <td> $name </td>
//     <td>$designation</td>
//     <td> $salary </td>
//     </tr>";
// }
 
// echo "</table>";

 
?>