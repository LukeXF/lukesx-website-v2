
<?php     
	$link = file_get_contents('http://api.steampowered.com/IPlayerService/GetRecentlyPlayedGames/v0001/?key=2183932629EFE376786968365BBBB4C2&steamid=76561198031666291&format=json', true);     
	$myarray = json_decode($link, true);     
	print $myarray['response']['players'][0]['steamid'];  
?>

<?php /*
    $id = $_GET['76561198031666291'];
    $key = '2183932629EFE376786968365BBBB4C2';
    $link = file_get_contents('http://api.steampowered.com/ISteamUser/GetRecentlyPlayedGames/v0001/?key=' . $key . '&steamids=' . $id . '&format=json');
    $myarray = json_decode($link, true);

    print $myarray['response']['total_count']['appid'];
*/ ?>