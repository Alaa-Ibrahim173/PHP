<html>
    <head>
        
    </head>
    <body>
<?php
echo'<h2>Application name : PHP class registration</h2>';
function build_table($identifier){
    // start table
    $file = '<table>';
    // header row
    $file .= '<tr>';
    foreach($identifier[0] as $key=>$value){
            $file .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $file .= '</tr>';

    // data rows
    foreach( $identifier as $key=>$value){
        
        $file .= '<tr>';
foreach($value as $key2=>$value2){
            if($value2=="Science")
            {
            $file .= '<td style="color:red;">' . htmlspecialchars($value2) . '</td>';
           


            }    
            else
            {
             $file .= '<td >' . htmlspecialchars($value2) . '</td>';
            }
 }

        $file .= '</tr>';
    }
    // finish table and return it

    $file .= '</table>';


    return $file;
}$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],];
    
    
echo build_table($students);
?>


</body>
</html>