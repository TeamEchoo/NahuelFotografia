<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Nahuel Martinez</title>
</head>
<body>
    <h1>Dashboard</h1>

    <form action=" {{ route( 'photoStore' ) }}"  method="post">
        
        @csrf
        
        <label for="title">Title:</label>
        <input name="title" type="text">
        
        <label for="epigraph">Epigraph:</label>
        <input name="epigraph" type="text">


        <label for="person">Person:</label>
        <input name="person" type="text">
        
        <label for="link">Link:</label>
        <input name="link" type="text">

        <label for="image_path">Picture:</label>
        <input name="image_path" type="text">

        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="Skateboarding">Skateboarding</option>
            <option value="Portraits">Portraits</option>
        </select>

        <label for="album">Album:</label>
        <input name="album" type="text">

        <input type="submit" value="Submit">
    </form>