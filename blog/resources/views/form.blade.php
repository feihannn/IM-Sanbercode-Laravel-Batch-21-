<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <!-- Registrasi Nama-->
        <form action="/datang"method="POST">
            @csrf
        <label for="nama">First name:</label><br><br>
        
        <input type="text" name="nama_depan">
        <br><br>
        <label for="nama_bel">Last name:</label><br><br>
        <input type="text" name="nama_belakang">
        <br><br>
        <!-- Gender-->
        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="0">Male<br>
        <input type="radio" name="gender" value="1">Female<br>
        <input type="radio" name="gender" value="1">Other<br><br>
        <!-- Kebangsaan-->
        <label>Nationality:</label><br><br>
        <select>
            <option>Indonesian</option>
            <option>Singaporean</option>
            <option>Malaysian</option>
            <option>Australian</option>
        </select>
        <!-- Bahasa Pengguna-->
        <br><br>
        <label>Language Spoken</label><br><br>
        <input type="checkbox" value="Bahasa">Bahasa Indonesia<br>
        <input type="checkbox" value="English">English<br>
        <input type="checkbox" value="Other">Other<br><br>
        <!-- Bio-->
        <label for="bio">Bio:</label><br><br>
        <textarea cols="30" rows="7" id="bio"></textarea><br>
        <!-- Submit-->
        <input type="submit" value="Sign Up">
        </form>
    </body>
</html>