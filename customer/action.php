<?php

include '../connection.php';

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    if ($aksi == 'insertProductToCart') {
        $id_user = $_GET['id_user'];
        $id_product = $_GET['id_product'];
        insertProductToCart($conn, $id_user, $id_product);
    } else if ($aksi == 'deleteCart') {
        $id_user = $_GET['id_user'];
        $id_product = $_GET['id_product'];
        deleteDataCart($conn, $id_user, $id_product);
    } else if ($aksi == 'deleteAllCart') {
        $id_user = $_GET['id_user'];
        deleteAllDataCart($conn, $id_user);
    } else if ($aksi == 'checkout') {
    $id_user = $_GET['id_user'];
    checkout($conn, $id_user);
}
}

function showDataCategory($con)
{
    $query = 'select * from category';
    $result = $con->execute_query($query);
    return $result;
}

function readProduct($con)
{
    $query = "select product.id, product.nama, product.harga, product.image, product.stock, category.nama as nama_category from product join category on product.id_category = category.id";
    $result = $con->execute_query($query);
    return $result;
}

function insertProductToCart($con, $id_user, $id_product)
{
    $query = "insert into cart (id_user, id_product) values ('$id_user', '$id_product')";
    $result = $con->execute_query($query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal Insert". $con->error;
    }
}

function showDataCart($con, $id_user)
{
    $query = "SELECT cart.id_product, product.nama AS nama_product, product.harga, product.image, COUNT(*) AS qty
              FROM cart
              JOIN product ON cart.id_product = product.id
              WHERE cart.id_user = '$id_user'
              GROUP BY cart.id_product, product.nama, product.harga, product.image";
    $result = $con->execute_query($query);
    return $result;
}

function deleteDataCart($con, $id_user, $id_product)
{
    $query = "DELETE FROM cart WHERE id_user = '$id_user' AND id_product = '$id_product' limit 1";
    $result = $con->execute_query($query);
    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal Delete";
    }
}

function deleteAllDataCart($con, $id_user)
{
    $query = "DELETE FROM cart WHERE id_user='$id_user'";
    $result = $con->execute_query($query);
    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal Delete";
    }
}

function showTotalCart($con, $id_user)
{
    $query = "select sum(product.harga) as total 
from cart join product on cart.id_product =
product.id where id_user='$id_user'";
    $result = $con->execute_query($query);
    return $result->fetch_assoc();
}

function checkout($con, $id_user) {
    // 1. Ambil total dari cart
    $total = $con->execute_query(
        "SELECT SUM(product.harga) as total FROM cart 
         JOIN product ON cart.id_product = product.id 
         WHERE cart.id_user = '$id_user'"
    )->fetch_assoc();

    $total_pembelian = $total['total'] ?? 0;
    $tgl_transaksi = date('Y-m-d H:i:s');

    // 2. Insert ke transaksi
    $con->execute_query(
        "INSERT INTO transaksi (id_user, total_pembelian, tgl_transaksi) 
         VALUES ('$id_user', '$total_pembelian', '$tgl_transaksi')"
    );
    $id_transaksi = $con->insert_id;

    // 3. Ambil data cart lalu insert ke detail_transaksi
    $cart = $con->execute_query(
        "SELECT cart.id_product, product.harga, COUNT(*) as jumlah 
         FROM cart 
         JOIN product ON cart.id_product = product.id 
         WHERE cart.id_user = '$id_user'
         GROUP BY cart.id_product, product.harga"
    );

    while ($row = $cart->fetch_assoc()) {
        $total_jumlah = $row['harga'] * $row['jumlah'];
        $con->execute_query(
            "INSERT INTO detail_transaksi (id_transaksi, id_product, jumlah, total_jumlah) 
             VALUES ('$id_transaksi', '$row[id_product]', '$row[jumlah]', '$total_jumlah')"
        );
    }

    // 4. Kosongkan cart
    $con->execute_query("DELETE FROM cart WHERE id_user = '$id_user'");

    // 5. Redirect
    header("Location: index.php?success=1");
}