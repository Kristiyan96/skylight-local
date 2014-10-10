<div class="content">

    <div id="carousel-features" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-features" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-features" data-slide-to="1"></li>
            <li data-target="#carousel-features" data-slide-to="2"></li>
            <li data-target="#carousel-features" data-slide-to="3"></li>
            <li data-target="#carousel-features" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <a href="<?php echo base_url(); ?>art">
                <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/artslide.png" title="University of Edinburgh Art Collection" alt="University of Edinburgh Art Collection">
                <div class="carousel-caption caption-art" onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">
                    University of Edinburgh Art Collection
                </div>
                </a>
            </div>
            <div class="item">
                <a href="<?php echo base_url(); ?>mimed">
                <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/mimedslide.png" title="Musical Instrument Museums Edinburgh" alt="Musical Instrument Museums Edinburgh">
                <div class="carousel-caption caption-mimed" onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">
                    Musical Instrument Museums Edinburgh
                </div>
                </a>
            </div>
            <div class="item">
                <a href="<?php echo base_url(); ?>mimed/search/*/Collection:%22raymond+russell+collection%7C%7C%7CRaymond+Russell+Collection%22">
                <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/harpsichordslide.png" title="Raymond Russell Keyboards Collection" alt="Raymond Russell Keyboards Collection">
                <div class="carousel-caption caption-russell" onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">
                    Raymond Russell Keyboards Collection
                </div>
                </a>
            </div>
            <div class="item">
                <a href="<?php echo base_url(); ?>calendars">
                    <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/calendarslide.png" title="University of Edinburgh Calendars" alt="University of Edinburgh Calendars">
                    <div class="carousel-caption caption-calendars" onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">
                        University of Edinburgh Calendars
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://exhibitions.ed.ac.uk">
                    <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/exhibitionsslide.png" title="University of Edinburgh Exhibitions" alt="University of Edinburgh Exhibitions">
                    <div class="carousel-caption caption-exhibitions" onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">
                        University of Edinburgh Exhibitions
                    </div>
                </a>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-features" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-features" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <!-- wrapper for tiles -->
    <div class="tiles-wrapper">
        <ul class="tiles">
            <li class="tile">
                <a href='<?php echo base_url(); echo $this->config->item('index_page'); ?>/search/*/Type:"museums+%26+galleries%7C%7C%7CMuseums+%26+Galleries"?sort_by=dc.title_sort+asc' class="caption">
                    <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/museumstile.jpg" alt="Edinburgh University Museums &amp; Galleries Search" title="Edinburgh University Museums &amp; Galleries Search">
                    <span onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">Museums &amp; </br>Galleries</span>
                </a>
            </li>
            <li class="tile">
                <a href='<?php echo base_url(); echo $this->config->item('index_page'); ?>/search/*/Type:%22special+collections+%26+archives%7C%7C%7CSpecial+Collections+%26+Archives%22?sort_by=dc.title_sort+asc' class="caption">
                    <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/archivestile.jpg" alt="Edinburgh University Special Collections &amp; Archives Search" title="Edinburgh University Special Collections &amp; Archives Search">
                    <span onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">Special Collections &amp; Archives</span>
                </a>
            </li>
            <li class="tile">
                <a href="http://exhibitions.ed.ac.uk/" target="_blank" class="caption">
                    <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/currentexhibitionstile.jpg" alt="Edinburgh University Exhibitions Home" title="Edinburgh University Exhibitions Home">
                    <span onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">Latest <br/>Exhibitions</span>
                </a>
            </li>
            <li class="tile">
                <a href="http://www.ed.ac.uk/schools-departments/information-services/library-museum-gallery/crc/events-exhibitions" target="_blank" class="caption">
                    <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/pastexhibitionstile.jpg" alt="Edinburgh University Past Exhibitions Home" title="Edinburgh University Past Exhibitions Home">
                    <span onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">Past <br />Exhibitions</span>
                </a>
            </li>
            <li class="tile">
                <a href="http://images.is.ed.ac.uk/" target="_blank" class="caption">
                    <img src="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/lunatile.jpg" alt="Edinburgh University Image Collections Home" title="Edinburgh University Image Collections Home">
                    <span onmouseover="this.style.background='#005784';this.style.color='#FFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#005784'">Image </br>Collections</span>
                </a>
            </li>
        </ul>
    </div>

</div>