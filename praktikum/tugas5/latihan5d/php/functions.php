<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "pw_tubes_203040064");

    return $connect;
}

// Fungsi untuk melakukan query dan memasukannya kedalam array
function query($sql)
{
    $connect = koneksi();
    $result = mysqli_query($connect, "$sql");
    $items = [];
    while ($item = mysqli_fetch_assoc($result)) {
        $items[] = $item;
    }
    return $items;
}

// Fungsi untuk menambahkan data didalam database
function add($data)
{
    $connect = koneksi();

    $img = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['name']);
    $details = htmlspecialchars($data['details']);
    $price = htmlspecialchars($data['price']);
    $color = htmlspecialchars($data['color']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO shoes
                    VALUES
                    ('', '$img', '$name', '$details', '$price', '$color', '$category')";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

// Fungsi untuk menghapus data
function delete($id)
{
    $connect = koneksi();
    mysqli_query($connect, "DELETE FROM shoes WHERE id = $id");

    return mysqli_affected_rows($connect);
}

// Fungsi untuk mengubah data
function edit($data)
{
    $connect = koneksi();
    $id = $data['id'];
    $img = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['name']);
    $details = htmlspecialchars($data['details']);
    $price = htmlspecialchars($data['price']);
    $color = htmlspecialchars($data['color']);
    $category = htmlspecialchars($data['category']);

    $query = "UPDATE shoes
            SET 
            img = '$img',
            name = '$name',
            details = '$details',
            price = '$price',
            color = '$color',
            category = '$category'
            WHERE id = $id ";

    mysqli_query($connect, $query) or die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}
