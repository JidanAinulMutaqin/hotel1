<?php

$conn = mysqli_connect("localhost", "root", "", "salman");


function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows[]=$row;
    }
    return $rows;
};

function create ($data){
    global $conn;
        //ambil data dari tiap elemen yang ada di form
        $nama=htmlspecialchars($data["nama"]);
        $kamar=htmlspecialchars($data["kamar"]);
        $cekin=htmlspecialchars($data["cekin"]);
        $cekout=htmlspecialchars($data["cekout"]);
        $email=htmlspecialchars($data["email"]);
    
        //query insert data
        $query = "INSERT INTO datapengunjung
                    VALUES ('','$nama','$kamar','$cekin','$cekout','$email','','')";
    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    
}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM datapengunjung WHERE id = $id");
    mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    //ambil data dari tiap elemen yang ada di form
    $id=$data["id"];
    $nama=htmlspecialchars($data["nama"]);
    $kamar=htmlspecialchars($data["kamar"]);
    $cekin=htmlspecialchars($data["cekin"]);
    $cekout=htmlspecialchars($data["cekout"]);
    $email=htmlspecialchars($data["email"]);
    
    //query update data
    $query = "UPDATE datapengunjung SET
            nama = '$nama',
            kamar = '$kamar',
            cekin = '$cekin',
            cekout = '$cekout',
            email = '$email'
            WHERE id=$id
            ";
    
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function temukan($search){
    $query = "SELECT * FROM datapengunjung WHERE
    nama LIKE '%$search%'
    ";
    return query($query);
}

?>