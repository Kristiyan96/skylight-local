<?php

//Fast access to important variables
$title = $this->skylight_utilities->getField("Title");
$coverImageName = $this->skylight_utilities->getField("Image File Name");
$logoImageName = $this->skylight_utilities->getField("Logo Thumbnail");
$location = $this->skylight_utilities->getField("Institutional Map Reference");
$webURL = $this->skylight_utilities->getField("Institutional Web URL");
$linkToObject = $this->skylight_utilities->getField("Institutional Link to Object");

$title = isset( $solr[$title] ) ? $solr[$title][0] : "Untitled";
$image_name = isset( $solr[$coverImageName][0] ) ? $solr[$coverImageName][0] : "missing.jpg";

//Image variables setup
$coverImageJSON = "http://test.cantaloupe.is.ed.ac.uk/iiif/2/" . $image_name;
$coverImageURL = $coverImageJSON . '/full/full/0/default.jpg';
$coverImage = '<img class="record-image" src ="' .$coverImageURL .'"/>';

$json =  file_get_contents($coverImageJSON);
$jobj = json_decode($json, true);
$error = json_last_error();
$jsonheight = $jobj['height'];
$jsonwidth = $jobj['width'];

?>

<!--Seadragon image viewer-->
<div id="toolbarDiv" class="toolbar" style="position: relative;">
    <div style="background: transparent none repeat scroll 0% 0%; border: medium none; margin: 0px; padding: 0px; position: static; width: 100%; height: 100%;">
        <div style="background: transparent none repeat scroll 0% 0%; border: medium none; margin: 0px; padding: 0px; position: absolute; left: 0px; top: 0px;"></div>
        <div style="background: transparent none repeat scroll 0% 0%; border: medium none; margin: 0px; padding: 0px; position: absolute; right: 0px; top: 0px;"></div>
        <div style="background: transparent none repeat scroll 0% 0%; border: medium none; margin: 0px; padding: 0px; position: absolute; right: 0px; bottom: 0px;"></div>
        <div style="background: transparent none repeat scroll 0% 0%; border: medium none; margin: 0px; padding: 0px; position: absolute; left: 0px; bottom: 0px;"></div>
    </div>
</div>

<div id="openseadragon" class="cover-image-container full-width">
    <a class="visible-xs show-info" onclick="$('html, body').animate({scrollTop:$('.record-info').offset().top-50}, 500);">Show info</a>
</div>


<!--Page-specific script to load the record image-->
<script>
    var imageURL = <?php echo json_encode($coverImageJSON); ?>;
    var imageHeight = <?php echo json_encode($jsonheight); ?>;
    var imageWidth = <?php echo json_encode($jsonwidth); ?>;
</script>
<script src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/js/openseadragon.min.js"></script>
<script src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/js/openseadragonconfig.js"></script>

<!--Record information-->
<div class="record-info">
    <h1 class="itemtitle">
        <div class="backbtn">
            <i class="fa fa-arrow-left" aria-hidden="true" type="button" value="Back to Search Results" onClick="history.go(-1);"></i>
        </div>
        <?php echo $title ?>
    </h1>
    <div class="description">
        <?php
            foreach($recorddisplay as $key) {
                $element = $this->skylight_utilities->getField($key);
                if(isset( $solr[$element][0] )) {
                    echo '<div class="row"><span class="field">' . $key . '</span>' . $solr[$element][0] . '</div>';
                }
            }
        ?>
        <div id="map">
            <script>
                $(window).bind("load", function() {
                    <?php
                    echo 'initMap(convertToCoordinates("' . $solr[$location][0] . '"));';
                    $addLocation = $solr[$location][0] . '", "' . addslashes($title);
                    echo 'addLocation("' . $addLocation . '");';
                    ?>
                });
            </script>
        </div>
        <div class="col-xs-12 col-md-6">
            <?php
            $t_segments = explode("##", $solr[$logoImageName][0]);
            $t_filename = $t_segments[1];

            $t_handle = $t_segments[3];
            $t_handle_id = preg_replace('/^.*\//', '',$t_handle);
            $t_seq = $t_segments[4];
            $t_uri = './record/' . $t_handle_id . '/' . $t_seq . '/' . $t_filename;
            $thumbnailLink = '<img src = "' . $t_uri . '" class="uni-thumbnail" title="' . $record_title . '" /></a>';

            echo $thumbnailLink;
            ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <a href="<?php echo $solr[$linkToObject][0]; ?>">Link to Object</a>
            <a href="<?php echo $solr[$webURL][0]; ?>">Link to Institution</a>
        </div>
        <i class="fa fa-angle-double-down hidden-xs hidden-sm" aria-hidden="true"></i>
    </div>
</div>

<div class="content hidden">



