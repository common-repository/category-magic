=== Plugin Name ===
Contributors: che1959
Donate link: http://www.techgringo.com
Tags: category, categories, seo, posts, sidebar
Requires at least: 2.3
Tested up to: 2.9.2
Stable tag: 0.9.1

Category Magic allows you to do many magical things with categories. 

== Description ==
Note: Version 0.9 only works with WordPress 2.3 and above. If you are still using the 2.2 or below series, download version 0.8. 

Note: Version 0.9.1 reflects an update in the readme to reflect testing to higher version of WordPress. 

Category Magic allows you to do many magical things with categories. For example, it can display links to posts from a single category and even a random category. There are several plugins that can do that. Category Magic does more.  

On one of my sites, I had categories set up  of locations and other categories of type. For example. Schools, Universities and Institutes are categories as are places like USA, Canada, and Thailand. I wanted a way to display posts that belong to two categories. I wanted to be able to display links to 10 posts that belong to the School AND Thailand categories. After a lot of searching, I couldn't find a plugin to do this. That's why I made Category Magic. 

Category Magic does the usual posts in a single category and posts in a random category, but it goes further. It puts up links to posts that belong to two categories. These can be the latest posts or random posts. 

You can put the Category Magic php hooks in any template file, inside or outside of the loop. It's really just a simple php function. 

One note: The plugin limits itself to the last 1000 posts. If you have more than 1000 posts in a single category, you will need to modify the code slightly. 

== Installation ==

1) Download the plugin.

2) Extract the plugin.

3) Upload this `category_magic.php` file to your Wordpress Plugins directory.

4) Activate the plugin.

5) Find the code that suits your needs and put it in your template or page/post. If you put it in a page or post, you need to have the WP-Exec plugin installed and activated. 

Note: This plugin work either inside or outside of the loop.  

Be sure to put all of these function calls inside php tags. `(<?php functioncall ?>)`

* To display posts in a single category, use this function call:
`glmcatpost('x','z');`

  x is the category ID and z is the number of posts you want displayed. This call returns z posts in category x. 


* To display random posts in a single category, use this function call:
`glmcatranpost('x','z');`

  x is the category ID and z is the number of posts you want displayed. This call returns z random posts in category x. 

* To display random posts that belong to two categories, use this function call:
`glmdobcatranpost('x','y','z');`

  x is the dominant category ID, y is the secondary category ID and z is the number of posts. This call returns z random posts that belong to BOTH, x and y, categories. 

* To display a number of posts that belong to two distinct categories, use this function call:
`glmdobcat('x','y','z');`

  x is the dominant category ID, y is the secondary category ID and z is the number of posts. This call returns the last z numbers of posts that belong to BOTH, x and y, categories. 

* This call is not 2.3 ready, yet. To display random posts in a random category, use this function call:
`glmrancatranpost('z');`

  z should be the number of posts you want to show. This call returns z random posts. 


== Frequently Asked Questions ==

= Do you know a site that uses Category Magic on a large scale? =

[My Camp Resources](http://www.mycampresources.com/ "My Camp Resources") uses this plugin for organizing all of the games. Posts are categorized by age group and type of game. This plugin allowed the site owner, for example, to display links to water games for 9 to 12 year olds without resorting to a search function. 

== Screenshots ==
No screenshots available, sorry!
