<?php
interface IStory {
	function get_total_page_story();
	function get_list_story($total_page_story);
	function get_page_chapter($link_story);
	function get_story_detail($link_story);
	//function get_list_chapter($link_story);
	function get_list_chapter($link_story, $html);
	function curl_get_list_chapter($link_story, $alias, $page_chapter, $story_id);
}
?>
