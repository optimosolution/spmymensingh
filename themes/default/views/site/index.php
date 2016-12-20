<section class="animated fadeIn" style="margin-top: 5px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php $this->get_banner(6); ?>
            </div>
        </div>
    </div> <!-- container -->
</section>
<section class="animated fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section-title"><?php echo Content::get_title(19); ?></h2>
                <?php echo Content::get_picture(19); ?>
                <?php echo Content::get_introtext(19); ?>
            </div>
            <div class="col-md-4">
                <h2 class="section-title">Mission and Vision</h2>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#Message">
                                    Mission
                                </a>
                            </h4>
                        </div>
                        <div id="Message" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <?php $this->get_latest_message(24); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#Profile" class="collapsed">
                                    Vision
                                </a>
                            </h4>
                        </div>
                        <div id="Profile" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php $this->get_latest_message(25); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>

<section id="home-blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section-title">Notice Board</h2>
            </div>
            <div class="col-md-7">
                <section class="home-post">
                    <?php $this->get_latest_gbb_news(17); ?>
                </section>
            </div>
            <div class="col-md-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#incometax" data-toggle="tab"><?php echo ContentCategory::getCategoryName(26); ?></a></li>
                    <li><a href="#vat" data-toggle="tab"><?php echo ContentCategory::getCategoryName(27); ?></a></li>
                    <li><a href="#directory" data-toggle="tab"><?php echo ContentCategory::getCategoryName(28); ?></a></li>
                    <li><a href="#businessfaq" data-toggle="tab"><?php echo ContentCategory::getCategoryName(19); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="incometax">
                        <?php $this->get_latest_updates(26); ?>
                    </div>
                    <div class="tab-pane" id="vat">
                        <?php $this->get_latest_updates(27); ?>
                    </div>
                    <div class="tab-pane" id="directory">
                        <?php $this->get_latest_updates(28); ?>
                    </div>
                    <div class="tab-pane" id="businessfaq">
                        <?php $this->get_latest_updates(19); ?>
                    </div>
                </div>
                <?php $this->get_advertisement(9); ?>
            </div>
        </div>
    </div> <!-- container -->
</section>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="section-title"><?php echo BannerCategory::get_title(5); ?></h2>
        </div>
        <?php $this->get_supported_by(5); ?>
    </div>
</div>