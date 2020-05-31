<?php
$server = "localhost"
$username= "id13889707_root"
$password= "5+Jo|spkr9(M9t)n"
$dbname= "id13889707_jsonabi"

//koneksi
$conn = new mysqli($server,$username,$password,$dbname);

//check koneksi
if($conn->connect_error){
    die("koneksi gagal/failed ".$conn->connect_error);
}
$sql="Select * from t_menu";
$result=$conn->query($sql);
$data=array();

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }

}else{
        echo"data kosong"
    }
