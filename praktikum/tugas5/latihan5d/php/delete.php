<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

// Menghubungkan dengan file php lainnya
require 'functions.php';

$id = $_GET['id'];

if(delete($id) > 0) {
    echo "<script>
                alert('Data deleted successfully!');
                document.location.href = 'admin.php';
            </script>";
} else {
    echo "<script>
                alert('Failed to delete data.');
                document.location.href = 'admin.php';
            </script>";
}

?>