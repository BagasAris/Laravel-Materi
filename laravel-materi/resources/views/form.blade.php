<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>

    <form action="{{ route ('welcome') }}">
    <p>First Name :</p>
    <input type="text">

    <p>Last Name :</p>
    <input type="text">

    <p>Gender</p>
    <input type="radio">Male<br>
    <input type="radio">Famale

    <p>Nationality</p>
    <select name="" id="">
        <option value="Indonesia">Indonesia</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Laos">Laos</option>
    </select>

    <p>Language Spoken</p>
    <input type="checkbox">Bahasa Indonesia
    <br>
    <input type="checkbox">English
    <br>
    <input type="checkbox">Other

    <p>Bio</p>
    <textarea name="" id="" cols="30" rows="10"></textarea><br>
    <button type="sumbit">Sign Up</button>
</form>
</body>
</html>