<?php

include '../connection.php';


if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    if ($aksi == 'insert') {
        $nama = $_POST['nama_user'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_role = $_POST['id_role'];
        insertUser($conn, $nama, $alamat, $no_hp, $username, $password, $id_role);
    } else if ($aksi == 'edit') {
        $id = $_GET['id'];
        $data = showDataEditUser($conn, $id)->fetch_assoc();
    } else if ($aksi == 'update') {
        $id = $_POST['id'];
        $nama = $_POST['nama_user'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['id_role'];
        updateUser($conn, $id, $nama, $alamat, $no_hp, $username, $password, $role);
    } else if ($aksi == 'delete') {
        $id = $_GET['id'];
        deleteUser($conn, $id);
    }
}

function readUser($con)
{
    $query = "select
 user.id, user.nama, user.alamat, user.no_hp, 
user.username, user.password, role.nama as nama_role from user join role on user.id_role = role.id;";
    $result = $con->execute_query($query);
    return $result;
}

function showDataRole($con)
{
    $query = 'select * from role';
    $result = $con->execute_query($query);
    return $result;
}

function insertUser($con, $nama, $alamat, $no_hp, $username, $password, $role)
{
    $query = "insert into user (nama, alamat, no_hp, username, password, id_role) values ('$nama', '$alamat', '$no_hp', '$username', '$password', '$role')";
    $result = $con->execute_query($query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal Menambahkan Role";
    }
}

function showDataEditUser($con, $id)
{
    $query = "select * from user where id = $id";
    $result = $con->execute_query($query);
    return $result;
}

function updateUser($con, $id, $nama, $alamat, $no_hp, $username, $password, $role)
{
    $query = "update user set nama = '$nama', alamat = '$alamat', no_hp = '$no_hp', username = '$username', password = '$password', id_role = '$role' where id = $id";
    $result = $con->execute_query($query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal Mengupdate User";
    }
}

function deleteUser($con, $id)
{
    $query = "delete from user where id = $id";
    $result = $con->execute_query($query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal Menghapus User";
    }
}