
 {if $parentFieldArray[$col]!=''}
 
  {literal}
<script>
        jssor_slider1_starter = function (containerId) {

            var _SlideshowTransitions = [
            
            //Fade out R
                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
            $FillMode: 1,
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                 //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                           //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
            //responsive code begin
            //you can remove responsive code if you dont want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);


            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            }

            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //}
            //responsive code end
        };
    </script>

{/literal}
     {assign var=images value="^"|explode:$parentFieldArray[$col]}
     {assign var=exist_image value=""}
     {foreach from=$images item=item}
        {assign var="url_image" value=$image_path|cat:$item}
        {if file_exists($url_image)}
            {assign var=exist_image value=$exist_image|cat:$item|cat:"^"}
        {/if}
     {/foreach}
     {assign var=images value="^"|explode:$exist_image}
     <link href="custom/include/SugarFields/Fields/Documents/css/js-image-slider.css" rel="stylesheet" type="text/css">
  <script src="custom/include/js/jssor.slider.min.js"></script>
    {foreach from=$images item=item key=k name=foo}

    {if $k<2}
    {if $smarty.foreach.foo.first}
        <a href="javascript:void(0)" onclick="document.getElementById('{$col}{$parentFieldArray.ID}_light').style.display='block';document.getElementById('{$col}{$parentFieldArray.ID}_fade').style.display='block'">
        {assign var=exten value='.'|explode:$item}
            {if $exten[1] == "gif" || $exten[1] == "jpg" || $exten[1] == "png" || $exten[1] == "jpeg"}
                <img src="{$image_path}{$item}" title="{$item}" alt="{$item}" width="50" height="50"/>
            {else}
                <img src="{$image_path}{$exten[1]}.png" title="{$item}" alt="{$item}" width="50" height="50" />
            {/if}
</a>
    {else}
            <a href="javascript:void(0)" onclick="document.getElementById('{$col}{$parentFieldArray.ID}_light').style.display='block';document.getElementById('{$col}{$parentFieldArray.ID}_fade').style.display='block'">
             Show all </a>
    {/if}
    {/if}
 {/foreach}
 <div id="{$col}{$parentFieldArray.ID}_light" class="white_content" style="display: none;"><!-- You can move inline styles to css file or css block. -->
    <div id="{$col}{$parentFieldArray.ID}_slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px; height: 556px;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url({$image_path}loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

         <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 456px; overflow: hidden;">
        {foreach from=$images item=item}
            
            {assign var="url" value=$image_path|cat:$item}
            {if file_exists($url)}
            {assign var=extension value='.'|explode:$item}
            
        {if $extension[1] == "gif" || $extension[1] == "jpg" || $extension[1] == "png" || $extension[1] == "jpeg"} 
            {if $item!=''} 
            <div>
                <img u="image" title="{$item}" alt="{$item}" src="{$image_path}{$item}" />
                <img u="thumb" title="{$item}" alt="{$item}" src="{$image_path}{$item}" />
            </div>
            {/if}
            {elseif $extension[1] == "mp4"}
            {if $item!=''}
            <div>
                <video height="450px" width="99%" controls autoplay>
                   <source src="{$image_path}{$item}" type="video/mp4"> 
                  
                </video>
                <img u="thumb" title="{$item}" alt="{$item}" src="{$image_path}{$extension[1]}.png" />
            </div>
            {/if}
            {else}
            {if $item!=''}
            <div>
                <iframe src="//docs.google.com/gview?url={php}global $sugar_config; echo $sugar_config['site_url'];{/php}/{$image_path}{$item}&amp;embedded=true" height="450px" width="99%"></iframe>
                <img u="thumb" title="{$item}" alt="{$item}" src="{$image_path}{$extension[1]}.png" />
            </div>
            {/if}
            {/if}
            {/if}
        {/foreach}
        </div>
        <!-- Arrow Navigator Skin Begin -->
        
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 208px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 208px; right: 16px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>

         <!-- Trigger -->
        {literal}
        <script>
           jssor_slider1_starter('{/literal}{$col}{$parentFieldArray.ID}{literal}_slider1_container');
        </script>
        {/literal}
 </div>
         </div>       
         <div id="{$col}{$parentFieldArray.ID}_fade" class="black_overlay" style="display: none;" onclick="document.getElementById('{$col}{$parentFieldArray.ID}_light').style.display='none';document.getElementById('{$col}{$parentFieldArray.ID}_fade').style.display='none'"></div>

         
 {/if}
  {literal}
    <script>
    $(document).keyup(function(e) {
     if (e.keyCode == 27) { 
        
        document.getElementById('{$col}{$parentFieldArray.ID}_light').style.display='none';
        document.getElementById('{$col}{$parentFieldArray.ID}_fade').style.display='none';
    }
});
</script>
    {/literal}
    