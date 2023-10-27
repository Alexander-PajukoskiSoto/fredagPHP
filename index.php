<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <label for="friday">När fredag?:</label>
    <input type="date" id="friday" name="friday">
    <input type="submit" name="submit">
    <?php
    $dateToFriday=$_GET["friday"];
    // echo $dateToFriday;
    $rawDate= strtotime($dateToFriday);
    $day = date("N",$rawDate);
    if(!isset($_GET['submit'])){
        echo "Snälla lägg in ett värde!";
    }
    elseif($day == 5)
    {
        echo "<br><img src='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/1ae85b85-8400-4fcd-bc8f-0bdc7c91213a/d86vgln-35dbde13-7dfd-4001-8966-eeee9dde5ac6.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzFhZTg1Yjg1LTg0MDAtNGZjZC1iYzhmLTBiZGM3YzkxMjEzYVwvZDg2dmdsbi0zNWRiZGUxMy03ZGZkLTQwMDEtODk2Ni1lZWVlOWRkZTVhYzYuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.2NIlTlUIJ0_AE3lqQAWEjbwjJEz2b_fCdJMDiCNnIk8'></img>";
    }
    elseif($day>5){
        echo 7+(5-$day)." Dagar tills fredag!";
    }
    elseif($day==4){
        echo "1 Dag tills fredag";
    }
    else{
        echo 5-$day . " Dagar tills fredag!";
    }
    ?>
    </form>
</body>
</html>