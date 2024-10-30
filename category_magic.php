<?php
/*
Plugin Name: Jack's Category Magic Plugin
Plugin URI: http://www.ax697.org/category-magic-on-wordpress-200765.html
Description: This plugin allows you to display posts in categories a variety of ways
Version: 0.9.1
Author: Jack Woods
Author URI: http://ricotierra.com
*/
/*  Copyright 2007-2010  Jack  (email : jack@ricotierra.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function glmdobcat() {
$arg_list = func_get_args();
$cat_ID1 = $arg_list[0];
$cat_ID2 = $arg_list[1];
$numposts = $arg_list[2];
$catquery1 = 'numberposts=1000&category='.$cat_ID1; //sets up the query for id1
$catposts1 = get_posts($catquery1); //gets the posts from category id1
$catquery2 = 'numberposts=1000&category='.$cat_ID2; //sets up the query for id1
$catposts2 = get_posts($catquery2); //gets the posts from category id1
$count=0;  //sets the count to zero
$permid1 = array(); //defines permid1 as an array
$glmpostarray= array();
$count2=1;
if (empty($numposts))
$numposts='5';
foreach($catposts1 as $post1) :   //starts looping from the posts from query1
	$permid1[$count] = get_permalink($post1); //stores permlink from each post
	
	foreach($catposts2 as $post2) :  //starts looping from the posts from query1
 	 $permid2 = get_permalink($post2); //stores permlink from each post
	   	  if ($permid2 == $permid1[$count]) {  //checks if permlink is same
		 				$glmpostarray[$count2] = '<ul><li><a href="'.get_permalink($post2).'">'.$post2->post_title.'</a></li></ul>';
			$count2++; }
   	endforeach;

	$count++; //increments the counter
endforeach;

if ($numposts > $count2)
$numposts = $count2; 

for ($i=1; $i<=$numposts; $i++) 
echo $glmpostarray[$i];



}

function glmcatranpost() {
$arg_list = func_get_args();
$cat_ID1 = $arg_list[0];
$numposts = $arg_list[1];
$catquery1 = 'numberposts=1000&category='.$cat_ID1; //sets up the query for id1
$catposts1 = get_posts($catquery1); //gets the posts from category id1
$count=0;  //sets the count to zero
$glmpostarray= array();
$i = 1;
if (empty($numposts))
$numposts='5';

foreach($catposts1 as $post1) :   //starts looping from the posts from query1
	$glmpostarray[$count] = '<ul><li><a href="'.get_permalink($post1).'">'.$post1->post_title.'</a></li></ul>';
	$count++; //increments the counter
endforeach;

if ($numposts > $count)  
	$numposts = $count; 

shuffle($glmpostarray);
for ($i=0; $i<$numposts; $i++) { 
	echo $glmpostarray[$i]; }


}

function glmdobcatranpost() {
$arg_list = func_get_args();
$cat_ID1 = $arg_list[0];
$cat_ID2 = $arg_list[1];
$numposts = $arg_list[2];
$catquery1 = 'numberposts=1000&category='.$cat_ID1; //sets up the query for id1
$catposts1 = get_posts($catquery1); //gets the posts from category id1
$catquery2 = 'numberposts=1000&category='.$cat_ID2; //sets up the query for id1
$catposts2 = get_posts($catquery2); //gets the posts from category id1
$count=0;  //sets the count to zero
$permid1 = array(); //defines permid1 as an array
$glmpostarray= array();
$count2=0;
if (empty($numposts))
$numposts='5';
foreach($catposts1 as $post1) :   //starts looping from the posts from query1
	$permid1[$count] = get_permalink($post1); //stores permlink from each post
	
	foreach($catposts2 as $post2) :  //starts looping from the posts from query1
 	 $permid2 = get_permalink($post2); //stores permlink from each post
	   	  if ($permid2 == $permid1[$count]) {  //checks if permlink is same
		 				$glmpostarray[$count2] = '<ul><li><a href="'.get_permalink($post2).'">'.$post2->post_title.'</a></li></ul>';
			$count2++; }
   	endforeach;

	$count++; //increments the counter
endforeach;

if ($numposts > $count2)  
	$numposts = $count2; 

shuffle($glmpostarray);
for ($i=0; $i<$numposts; $i++) { 
	echo $glmpostarray[$i]; }



}

function glmcatpost() {
$arg_list = func_get_args();
$cat_ID1 = $arg_list[0];
$numposts = $arg_list[1];
$catquery1 = 'numberposts=1000&category='.$cat_ID1; //sets up the query for id1
$catposts1 = get_posts($catquery1); //gets the posts from category id1
$count=0;  //sets the count to zero
$glmpostarray= array();
$i = 1;
if (empty($numposts))
$numposts='5';

foreach($catposts1 as $post1) :   //starts looping from the posts from query1
	$glmpostarray[$count] = '<ul><li><a href="'.get_permalink($post1).'">'.$post1->post_title.'</a></li></ul>';
	$count++; //increments the counter
endforeach;

if ($numposts > $count)  
	$numposts = $count; 

for ($i=0; $i<$numposts; $i++) { 
	echo $glmpostarray[$i]; }


}

function glmrancatranpost() {
$arg_list = func_get_args();
$numposts = $arg_list[0];
global $wpdb;
$catstuff = $wpdb->get_results("SELECT term_id FROM $wpdb->term_taxonomy WHERE count > 0 AND taxonomy = 'category'");
shuffle($catstuff);
$cat_ID1 = $catstuff[0]->term_id;
$catquery1 = 'numberposts=1000&category='.$cat_ID1; //sets up the query for id1
$catposts1 = get_posts($catquery1); //gets the posts from category id1
$count=0;  //sets the count to zero
$glmpostarray= array();
$i = 0;
if (empty($numposts))
$numposts='5';

foreach($catposts1 as $post1) :   //start looping from the posts from query1
	$glmpostarray[$count] = '<ul><li><a href="'.get_permalink($post1).'">'.$post1->post_title.'</a></li></ul>';
	$count++; //increments the counter
endforeach;

if ($numposts > $count)  
	$numposts = $count; 

shuffle($glmpostarray);
$displaycat = '<h2>'.$cat_name.'</h2>';
echo $displaycat;
for ($i=0; $i<$numposts; $i++) { 
	echo $glmpostarray[$i]; }


}

?>
