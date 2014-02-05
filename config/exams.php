<?php

$config['skylight_appname'] = 'Exams';

$config['skylight_theme'] = 'exams';

$config['skylight_fullname'] = 'Exams';

$config['skylight_adminemail'] = 'example@example.com';

$config['skylight_oaipmhcollection'] = 'hdl_123456789_1';


// Container ID and the field used in solr index to store this ID. Used for restricting search/browse scope.
$config['skylight_container_id'] = '*';
$config['skylight_container_field'] = 'location.coll';

// This array only appears to be used in Utilities to translate label to value and vice versa. Robin.
$config['skylight_fields'] = array(
    'School' => 'dc.creator.en',
    'Subject' => 'dc.subject.en',
    'Academic Year' => 'dc.coverage.temporal.en',
    'Title' => 'dc.title.en',

    'Version' => 'dc.description.version.en',
    'Type' => 'dc.type.en',
    'Abstract' => 'dc.description.abstract',
    'Date' => 'dc.date.issued',
    'Accession Date' => 'dc.date.accessioned_dt'
);

$config['skylight_date_filters'] = array('Date' => 'dateIssued.year_sort');
$config['skylight_filters'] = array('School' => 'author_filter', 'Subject' => 'subject_filter', 'Academic Year' => 'coverageTemporal_filter', 'Title' => 'title_filter');
$config['skylight_filter_delimiter'] = ':';

$config['skylight_meta_fields'] = array('Title' => 'dc.title',
    'Author' => 'dc.creator',
    'Abstract' => 'dc.description.abstract',
    'Subject' => 'dc.subject',
    'Date' => 'dc.date.issued',
    'Type' => 'dc.type');

$config['skylight_recorddisplay'] = array('Title','Author','Subject','Type','Abstract');

$config['skylight_searchresult_display'] = array('Title','Author','Subject','Type','Abstract');

$config['skylight_search_fields'] = array('School' => 'dc.creator',
    'Subject' => 'dc.subject',
    'Academic Year' => 'dc.coverage.temporal',
    'Title' => 'dc.title',
    'Keywords' => 'text'
);

$config['skylight_sort_fields'] = array('Title' => 'dc.title_sort',
    'Date' => 'dc.date.issued_dt'
);

$config['skylight_feed_fields'] = array('Title' => 'Title',
    'Author' => 'Author',
    'Subject' => 'Subject',
    'Description' => 'Abstract',
    'Date' => 'Date');

$config['skylight_results_per_page'] = 10;
$config['skylight_share_buttons'] = false;

$config['skylight_homepage_recentitems'] = false;

// Set to the number of minutes to cache pages for. Set to false for no caching.
// This overrides the setting in skylight.php so is commented by Demo
$config['skylight_cache'] = false;

// Digital object management
$config['skylight_bitstream_field'] = 'dc.format.original';
$config['skylight_thumbnail_field'] = 'dc.format.thumbnail';
$config['skylight_display_thumbnail'] = true;
$config['skylight_link_bitstream'] = true;


// Display common image formats in "light box" gallery?
$config['skylight_lightbox'] = true;
$config['skylight_lightbox_mimes'] = array('image/jpeg', 'image/gif', 'image/png');

// Language and locale settings
$config['skylight_language_default'] = 'en';
$config['skylight_language_options'] = array('en', 'ko', 'jp');

?>