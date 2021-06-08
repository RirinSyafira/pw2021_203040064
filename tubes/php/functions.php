<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $connect = mysqli_connect("localhost", "pw20064", "#Akun#203040064#") or die("koneksi ke DB gagal");
    mysqli_select_db($connect, "pw20064_tubes_203040064") or die("Database salah!");

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
                    (NULL, '$img', '$name', '$details', '$price', '$color', '$category')";

    mysqli_query($connect, $query) or die(mysqli_error($connect));

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
    $id = htmlspecialchars($data['id']);
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

// Fungsi mencari data
function cari($keyword)
{
    $connect = koneksi();

    $query = "SELECT * FROM shoes 
            WHERE
            name LIKE '%$keyword%' OR
            details LIKE '%$keyword%' OR
            price LIKE '%$keyword%' OR
            color LIKE '%$keyword%' OR
            category LIKE '%$keyword%' ";

    return query($query);
}

// Fungsi untuk registrasi 
function registrasi($data)
{
    $connect = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($connect, $data["password"]);

    // Cek ada tidaknya username
    $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan');
            </script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah User baru
    $query_tambah = "INSERT INTO user VALUES(NULL, '$username', '$password')";
    mysqli_query($connect, $query_tambah) or die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}
