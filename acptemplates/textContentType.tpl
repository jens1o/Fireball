<dl class="wide">
	<dt><label for="text">{lang}cms.content.type.de.codequake.cms.content.type.text.text{/lang}</label></dt>
	<dd>
		<textarea name="text" id="text">{$i18nPlainValues['text']}</textarea>
	</dd>
</dl>

{include file='multipleLanguageInputJavascript' elementIdentifier='text' forceSelection=false}

<script data-relocate="true" src="{@$__wcf->getPath('cms')}js/3rdParty/ckeditor/ckeditor.js"></script>
<script data-relocate="true" src="{@$__wcf->getPath('cms')}js/3rdParty/ckeditor/adapters/jquery.js"></script>
<script data-relocate="true">
	//<![CDATA[
	$(function() {
		$('#text').ckeditor();
	});
	//]]>
</script>