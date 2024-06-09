<!DOCTYPE html>
<?php
if (!isset($_GET['username'])) die();
if ($_GET['username']!=='helvetian') die();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LetMeStyle Results for helvetian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: white;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .description {
            text-align: center;
            margin: 20px 0;
            font-size: 1.2em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
<header>
    <h1>LetMeStyle Results for helvetian</h1>
</header>
<div class="description">
    <p>For 09 June, 14:00 you have such results:</p>
</div>
<table>
    <thead>
    <tr>
        <th>Rank</th>
        <th>Photo</th>
        <th>Votes</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td><img src="pic02.jpg" alt="Photo 1"></td>
        <td>14</td>
    </tr>
    <tr>
        <td>2</td>
        <td><img src="pic01.jpg" alt="Photo 2"></td>
        <td>11</td>
    </tr>
    <tr>
        <td>3</td>
        <td><img src="pic03.jpg" alt="Photo 3"></td>
        <td>5</td>
    </tr>
    </tbody>
</table>
</body>
</html>

