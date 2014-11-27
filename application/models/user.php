<?php
Class User extends CI_Model
{
 FUNCTION login($username, $password)
 {
   $this -> db -> select('id, username, PASSWORD');
   $this -> db -> from('users');
   $this -> db -> where('USERNAME', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     RETURN $query->result();
   }
   else
   {
     return false;
   }
 }
}