{* Extend our master template *} {extends
file="layout/master_admin.tpl"} {*This block is defined in the
master.php template *} {block name=title} Crawler Config {/block} {*
This block is defined in the master.php template*} {block
name=stylesheet}
<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<style type="text/css">
</style>
{/block} {block name=body} {foreach $arr_data as $key=>$config}
<div>
	<div class="panel panel-success">
		<div class="panel-heading">{$key}</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Key</th>
						<th>Value</th>
						<th>Edit</th>
					</tr>
				</thead>
			
				<tbody>
{$count = 1}
{foreach $config as $k=>$v}
					<tr>
						<th scope="row">{$count}</th>
						<td>{$k}</td>
						<td>{$v}</td>
						<td><i class="fa fa-camera-retro"></i></td>
					</tr>
{$count = $count +1}
{/foreach}
				</tbody>
			</table>

		</div>
	</div>
</div>
{/foreach}
{/block} {block name="javascript"}
<script language="javascript">
	$(document).ready(function(){
	
	
	});
</script>

{/block}
