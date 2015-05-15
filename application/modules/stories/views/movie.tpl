{* Extend our master template *} {extends file="layout/master.tpl"}
{*This block is defined in the master.php template *} {block name=title}
Cart Detail {/block} {* This block is defined in the master.php
template*} 
{block name=stylesheet}
<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.12/video.js"></script>
<style type="text/css">
  .vjs-default-skin { color: #ffffff; }
  .vjs-default-skin .vjs-control-bar { font-size: 85% }
</style>
{/block}
{block name=body}
<div>
<div id="media">
<object id="flashplayer" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%">
	<param name="movie" value="{$fixed_base_url}plugin/gkplugins_youtube/player.swf">
	<param name="allowFullScreen" value="true">
	<param name="allowScriptAccess" value="always">
	
	<embed name="flashplayer" src="{$fixed_base_url}plugin/gkplugins_youtube/player.swf" flashvars="plugins=timeslidertooltipplugin,{$fixed_base_url}plugin/gkplugins_youtube/proxy.swf&amp;proxy.link=https://plus.google.com/photos/110674564899938367004/albums/5892112910843960289/5892874286460687234?pid=5892874286460687234&oid=110674564899938367004&authkey=COm4naGt49f17QE&amp;proxy.image=http://anime47.com/tool/googlevid/play.jpg&amp;repeat=true" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="100%" height="100%">
</object>
	</div>
</div>
<div>

</div>
{/block}
{block name="javascript"}
<script>
$(document).ready(function(){


});

{/block}