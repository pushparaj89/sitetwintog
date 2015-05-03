
<?php $staticContent = $sf_data->getRaw('static_content'); ?>
<div class="container" id="home">
    <div class="row">
        <div class="col col-md-12">
            <div class="flexslider">
                <ul class="slides">
                    <?php foreach ($gallerys as $value): ?>
                    <li>
                        <img src=<?php echo "/uploads/image_url/".$value->getImageURL(); ?> alt="slide 1" />
<!--                        <p class="flex-caption">Mauris quis sapien sed mauris gravida congue. Fusce convallis felis non lectus facilisis, vel consequat felis dictum.</p>-->
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<section id="about">
    <div class="outer_container">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-sm-12"><h1>About us</h1></div>
                <div class="col col-md-7 col-sm-12 center-row" id="about_content">
                    <div class="row center">
                        <div class="col col-md-4 col-sm-12 templatemo_ceo">
                            <?php foreach ($static_content as $value): ?>
                                <img src=<?php echo "/uploads/image_url/".$value->getAboutUsImg(); ?> alt="Linda" class="center-block img-circle img-responsive">
                                <p><?php echo $value->getAboutUsImgContent(); ?></p>
                            <?php endforeach; ?>

                        </div>
                        <div class="col col-md-8 col-sm-12">
<!--                            --><?php //print_r($staticContent); ?>
                            <p> <?php foreach ($static_content as $value): ?>
                                    <?php echo nl2br($value->getAboutUs()); ?>
                                <?php endforeach; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="outer_container">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-md-push-7 col-sm-12"><h1>Our Team</h1></div>
                <div class="col col-md-7 col-md-pull-5 col-sm-12 center-row" id="team_content">
                    <div class="row center team_flexslider" >
                        <ul class="slides">
                            <?php foreach ($our_team as $value): ?>
                                <li>
                                    <div class="col col-md-4 col-sm-4 col-xs-4">
                                        <img src=<?php echo "/uploads/image_url/".$value->getEmployeeImg(); ?> width="170px" height="170px" alt="Nancy" class="img-circle img-responsive">
                                        <p><?php echo $value->getEmployeeName() ?></p>
                                        <p><?php echo $value->getEmployeeDesignation() ?></p>
                                    </div>
                                    <div class="col col-md-8 col-sm-8 col-xs-8">
                                        <p><?php echo nl2br($value->getEmployeeBio()); ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services">
    <div class="outer_container">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-sm-12 col-xs-12">
                    <h1>Services</h1>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="services_buttons">
                        <ul id="services_tabs">
                            <li class="icon-button active" data-target="#pencil"><i class="fa fa-pencil" style="vertical-align: middle"></i></li>
                            <li class="icon-button" data-target="#cog"><i class="fa fa-cog"></i></li>
                            <li class="icon-button" data-target="#signal"><i class="fa fa-signal"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-5 col-sm-10 col-xs-10 center-row" id="services_content">
                    <div class="arrow-left"></div>
                    <div class="arrow-box center-row">
                        <div class="tab-content center">
                            <div class="tab-pane fade in active" id="pencil">
                                <h3>Web Design & Development</h3>
                                <p><?php foreach ($static_content as $value): ?>
                                        <?php echo nl2br($value->getServicesWeb()); ?>
                                    <?php endforeach; ?></p>
                            </div>
                            <div class="tab-pane fade" id="cog">
                                <h3>SEO</h3>
                                <p><?php foreach ($static_content as $value): ?>
                                        <?php echo nl2br($value->getServicesSeo()); ?>
                                    <?php endforeach; ?></p>
                            </div>
                            <div class="tab-pane fade" id="signal">
                                <h3>Smart Content and Business Solutions for Your Industry</h3>
                                <p><?php foreach ($static_content as $value): ?>
                                        <?php echo nl2br($value->getServicesApp()); ?>
                                    <?php endforeach; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="skills">
    <div class="outer_container">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-md-push-7 col-sm-12"><h1>Solutions</h1></div>
                <div class="col col-md-7 col-md-pull-5 col-sm-12">
                    <br>
                    <div class="progress vertical">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 85%;width: 100%">
                            <div class="progress-label">
                                <p>Website Development</p>
                                <p>85%</p>
                            </div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="height: 98%;width: 100%">
                            <div class="progress-label">
                                <p>Intranet Development</p>
                                <p>98%</p>
                            </div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="height: 90%;width: 100%">
                            <div class="progress-label">
                                <p>Website and Intranet Maintenance</p>
                                <p>90%</p>
                            </div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 95%;width: 100%">
                            <div class="progress-label">
                                <p>SEO</p>
                                <p>95%</p>
                            </div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="height: 80%;width: 100%">
                            <div class="progress-label">
                                <p>Web Performance Solutions</p>
                                <p>80%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="outer_container">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-sm-12"><h1>Contact</h1></div>
                <div class="col col-md-7 col-sm-12 col-xs-12 center-row" id="contact_content">
                    
                    <form name="conatct_form" id="contactform" method="post" action="" class="center">
                        <div class="thankyou"></div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="input_name" placeholder="Name...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="input_email" placeholder="Email...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" rows="3" class="form-control" id="input_message" placeholder="Message..."></textarea><br>
                                    <button type="submit" class="btn btn-primary pull-right">SEND</button>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="map">
    <div class="outer_container">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-md-push-7 col-sm-12"><h1>Map</h1></div>
                <div class="col col-md-7 col-md-pull-5 col-sm-12">
                    <div id="google_map">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("#contactform").validate({
        rules: {
            name: { required: true },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 10,
                number: true
            }
        },
        messages: {
            name: "Invalid name",
            email: "Invalid email address",
        },
        highlight: function(element) {
            $(element).parent().addClass("field-error");
        },
        unhighlight: function(element) {
            $(element).parent().removeClass("field-error").addClass("field-success");
        },
        submitHandler: function(form) {
            $.ajax({
                async: false,
                data: $("#contactform").serialize(),
                url : "/frontend_dev.php/Default/contactSave",
                type: 'POST',
                success: function (data) {
                    if(data == "Done") {
                        document.getElementById("contactform").reset();
                        $('#ask-success-msg').css('display','block');
                        $('.field-success').removeClass('field-success');
                        $('.thankyou').html('Your message was successfully sent.');
                        
                    }
                },
                error: function(){
                    alert('Something went wrong. Please try again.');
                }
            });
        }

    });

</script>