<!-- multidimensional array in use.. -->
<!-- <?php
$emp = [
    [1, "biswajit", "manager", 5000],
    [2, "sagar", "salesman", 6000],
    [3, "basudev", "science", 4000],
    [4, "babu", "driver", 8000]
];
// echo "<table border='2px' cellpadding='10px'>";
// echo "<tr>
//     <th>Empid</th>
//     <th>Empname</th>
//     <th>desigination</th>
//     <th>salary</th>
// </tr>";
// foreach($emp as $key){
//     echo "<tr>";
//     foreach($key as $value){
//         echo "<td> $value </td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// or ..
for($row = 0; $row < 4; $row++){
    for($col = 0; $col < 4; $col++){
        echo $emp[$row][$col] . " ";
    }
    echo "<br>";
}
?> -->


<!-- multidimensional Associative array in use... -->
<?php
    $marks = [
        "mohan" => [
            "phy" => 62,
            "mat" => 55,
            "emg" => 47
        ],
        "chintu" => [
            "phy" => 52,
            "mat" => 89,
            "emg" => 14
        ],
        "jaga" => [
            "phy" => 69,
            "mat" => 44,
            "emg" => 41
        ]
    ];
    echo "<table border = '2px' cellpadding = '10px'>";
    echo "<tr>
        <th>name</th>
        <th>phy</th>
        <th>math</th>
        <th>eng</th>
    </tr>";
        foreach ($marks as $key => $value) {
            echo "<tr>";
        echo "<td> $key </td>";
        foreach($value as $val){
            echo "<td> $val </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    // echo "<pre>";
    // print_r($marks);
    // echo "</pre>";
?>