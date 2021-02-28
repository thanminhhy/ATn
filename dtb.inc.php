<?php

$host = "ec2-54-235-139-166.compute-1.amazonaws.com";
$db = "d2aln19jkoqgc5";
$user = "dbzoashpxvqhmp";
$pw = "1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8";

$conn_string ="host=$host port=5432 dbname=$db user=$user password=$pw";
$pg = pg_connect($conn_string);

if(!$pg)
{
    die("Connection failed: " . pg_connect_error());
}
# Get data by query
$query = 'select * from users';
$result = pg_query($pg, $query);
