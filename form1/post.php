<?php
    // kondisi jika tombol submit memiliki value = send
    if(isset ($_POST['submit']) && $_POST['submit']=='send'){

        // buat variabel varu
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // menampilkan value yang tersimpan di dalam varibel
        echo'
            <div> Username : ' .$username . ' </div>
            <div> password : ' .$password . ' </div>

        ';

    } else {
        echo "<h1>Oops!</h1> something wrong!";
    }