{include file="modules/DynamicFields/templates/Fields/Forms/coreTop.tpl"}

<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="Document Type"}:</td>
	<td>
	<input type="hidden" name="doctype" value="{$vardef.doctype}">
	
	
		<input type="checkbox" name="docutype" value="jpg" {if $vardef.doctype|strstr:"jpg"} Checked{/if}> jpg/jpeg
		<input type="checkbox" name="docutype" value="png" {if $vardef.doctype|strstr:"png"} Checked{/if}> png
		<input type="checkbox" name="docutype" value="gif" {if $vardef.doctype|strstr:"gif"} Checked{/if}> gif
		<input type="checkbox" name="docutype" value="pdf" {if $vardef.doctype|strstr:"pdf"} Checked{/if}> pdf
		<input type="checkbox" name="docutype" value="doc,docx" {if $vardef.doctype|strstr:"doc,docx"} Checked{/if}> doc/docx
		<input type="checkbox" name="docutype" value="odt" {if $vardef.doctype|strstr:"odt"} Checked{/if}> odt
		<input type="checkbox" name="docutype" value="txt" {if $vardef.doctype|strstr:"txt"} Checked{/if}> txt
		<input type="checkbox" name="docutype" value="html" {if $vardef.doctype|strstr:"html"} Checked{/if}> html
		<input type="checkbox" name="docutype" value="mp4" {if $vardef.doctype|strstr:"mp4"} Checked{/if}> mp4
		<input type="checkbox" name="docutype" value="zip" {if $vardef.doctype|strstr:"zip"} Checked{/if}> zip
		<input type="checkbox" name="docutype" value="ref" {if $vardef.doctype|strstr:"ref"} Checked{/if}> ref
		<input type="checkbox" name="docutype" value="epub" {if $vardef.doctype|strstr:"epub"} Checked{/if}> epub
		<input type="checkbox" name="docutype" value="ppk" {if $vardef.doctype|strstr:"ppk"} Checked{/if}> ppk
		<input type="checkbox" name="docutype" value="pem" {if $vardef.doctype|strstr:"pem"} Checked{/if}> pem
		<input type="checkbox" name="docutype" value="ppt" {if $vardef.doctype|strstr:"ppt"} Checked{/if}> ppt
		<input type="checkbox" name="docutype" value="pptx" {if $vardef.doctype|strstr:"pptx"} Checked{/if}> pptx
		
		
	</td>
</tr>

{literal}
<script>

          $.each($('input[name=docutype]'),
              function () {
                  $(this).click(
                      function () {
                          var txt = '';
                          $.each($('input[name=docutype]:checked'),
                              function () {
                                  txt = txt + $(this).val() + ',';
                              });
                          if (txt.length > 0)
                              txt = txt.substring(0, txt.length - 1);
                          $('input[name=doctype]').val(txt);
                      });
              });
         
     
	  </script>
{/literal}
{include file="modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl"}