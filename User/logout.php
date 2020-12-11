<?php
session_start();
echo "<script>
        alert('Logout Successfully');
        window.location.href = 'index.php';
    </script>";
session_clear();
?>