<?php

class gamers
{


public function __construct($_profile_id)
	{
 	$this->_profile_id = $_profile_id;
 	$this->_gamertag ;
 	$this->_email ;    
	$this->_img ;  
	$this->_img_icon ;    
  
	$this->_date_submitted ;
	$this->_total ;   
 	
global $connection;

 	
//$sql = "SELECT * FROM profiles p, profile_x_totals x WHERE p.profile_id = '$this->_profile_id' AND x.profile_id = p.profile_id";
$sql = "SELECT * FROM profiles p LEFT JOIN profile_x_totals x ON x.profile_id = p.profile_id WHERE p.profile_id = '$this->_profile_id' ";

//echo $sql;
$result = mysql_query($sql,$connection);
while($row = mysql_fetch_array($result)){
$this->_gamertag = $row['gamertag'];
$this->_email = $row['email'];    
$this->_img = $row['img'];
$this->_img_icon = $row['img'];    
    
$this->_date_submitted = $row['date_submitted'];
$this->_total = $row['total_id'];    
 	}

$sql = "SELECT votes FROM profile_x_totals  WHERE profile_id ='$this->_profile_id' ";
$result = mysql_query($sql, $connection);
while($row = mysql_fetch_array($result)){
$this->_total_votes = $row['votes'];

 	}
$this->_img_icon = str_replace('avatar-body.png', 'avatarpic-l.png', $this->_img_icon);
  

}


    
public function insertVote($score){
$score = $_score;

$sql = "INSERT INTO profile_x_votes (profile_id, vote_id) VALUES ('$this->_profile_id','$_score')";
$result = mysql_query($sql, $connection);


}


public function getData(){

$data_arr = array(

"profile_id" => "$this->_profile_id",
"gamertag" => "$this->_gamertag",
"email" => "$this->_email",
"img"=> "$this->_img",
"date_submitted"=> "$this->_date_submitted",
"total"=> "$this->_total"
);
return $data_arr;

}


public function setScore($__score){
$__total = $__score;
$this->_total = $__total;

   

}

public function setVotes($__vote){

$this->_total_votes = $__vote;

   

}

public function setImg($n_img){

$this->_img = $n_img;

}


public function setGamertag($n_gamertag){

$this->_gamertag = $n_gamertag;

}






}


?>