{* Extend our master template *}
{extends file="layout/master.tpl"}

{* This block is defined in the master.php template *}
{block name=title}
	{$title}
{/block}

{* This block is defined in the master.php template *}
{block name=body}
	<div>
		<p>{$body}</p>
	</div>	

{/block}