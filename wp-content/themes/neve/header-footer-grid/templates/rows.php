<script type="text/html" id="tmpl-hfg--cb-panel">
	<div class="hfg--cp-rows">

		<# if ( ! _.isUndefined( data.rows.top ) ) { #>
		<div class="hfg--row-top hfg--cb-row" data-id="{{ data.id }}_top">
			<a class="hfg--cb-row-settings" title="{{ data.rows.top.title || data.rows.top }}" data-id="top" href="#"></a>
			<div class="hfg--row-inner">
				<div class="row--title">{{ data.rows.top.title || data.rows.top }}</div>
				<div class="row--grid">
					