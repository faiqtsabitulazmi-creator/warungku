<?php

include '../connection.php';

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    if ($aksi == 'insert') {
        $nama = $_POST['nama'];
        insertCategory($conn, $nama);
    } else if ($aksi == 'edit') {
        $id = $_GET['id'];
        $data = showDataEditCategory($conn, $id);
        
    }else if ($aksi == 'update'){
       $id = $_POST['id'];
       $nama = $_POST['nama'];
       updateCategory($conn, $nama, $id);
       
    }else if ($aksi == 'delete'){
         $id = $_GET['id'];
         deleteCategory($conn, $id);
    }
}


function readCategory($con)
{
    $query = 'select * from category';
    $result = $con->execute_query($query);
    return $result;
}


function insertCategory($con, $nama)
{
    $query = "insert into category (nama) values ('$nama')";
    $result = $con->execute_query($query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Data gagal diinsert";
    }
}
function showDataEditCategory($con, $id)
{
    $query = "select * from category where id='$id'";
    $result = $con->execute_query($query);
    return $result;
}

function updateCategory($con, $nama, $id)
{
    $query = "update category set nama='$nama' where id='$id'";
    $result = $con->execute_query($query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal update";
    }
}

function deleteCategory($con, $id)
{
    $query = "delete from category where id='$id'";
    $result = $con->execute_query($query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal hapus";
    }
}