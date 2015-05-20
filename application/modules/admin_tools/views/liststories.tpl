{* Extend our master template *} {extends
file="layout/master_admin.tpl"} {*This block is defined in the
master.php template *} {block name=title} Crawler Config {/block} {*
This block is defined in the master.php template*} {block
name=stylesheet}
<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<style type="text/css">
</style>
{/block} {block name=body}
<div>
	<div class="panel panel-success">
		<div class="panel-heading"></div>
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
{foreach $arr_stories as $stories}
					<tr>
						<th scope="row">{$stories->id}</th>
						<td>{$stories->title}</td>
						<td>{$stories->key}</td>
						<td><i class="fa fa-camera-retro"></i></td>
					</tr>
{/foreach}
				</tbody>
			</table>

		</div>
	</div>
</div>
{/block} {block name="javascript"}
<script language="javascript">
	$(document).ready(function(){
	
	
	});
</script>

{/block}
