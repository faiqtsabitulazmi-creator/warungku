<?php

include '../connection.php';

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    if ($aksi == 'insert') {
        $nama = $_POST['nama'];
        insertRole($conn, $nama);
    } else if ($aksi == 'edit') {
        $id = $_GET['id'];
        $data = showDataEditRole($conn, $id);
        
    }else if ($aksi == 'update'){
       $id = $_POST['id'];
       $nama = $_POST['nama'];
       updateRole($conn, $nama, $id);
       
    }else if ($aksi == 'delete'){
         $id = $_GET['id'];
         deleteRole($conn, $id);
    }
}


function readRole($con)
{
    $query = 'select * from role';
    $result = $con->execute_query($query);
    return $result;
}
function showDataRole($con)
{
    $query = "select * from role";
    $result = $con->execute_query($query);
    return $result;
}


function insertRole($con, $nama)
{
    $query = "insert into role (nama) values ('$nama')";
    $result = $con->execute_query($query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Data gagal diinsert";
    }
}
function showDataEditRole($con, $id)
{
    $query = "select * from role where id='$id'";
    $result = $con->execute_query($query);
    return $result;
}

function updateRole($con, $nama, $id)
{
    $query = "update role set nama='$nama' where id='$id'";
    $result = $con->execute_query($query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal update";
    }
}

function deleteRole($con, $id)
{
    $query = "delete from role where id='$id'";
    $result = $con->execute_query($query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal hapus";
    }
}