<div class="about-nabil ">
    <div class="container-fluid">
        <div class="row  justify-content-center mx-auto">
            <div class="col-md-12 text-center mt-3">
                <h2 class="display-4">ABOUT AMER NABIL</h2>
                <h5 class="display-4">A LIFE DEFINED BY WHY AND NOT WHAT </h5>
            </div>
        </div>
        <div class="row mx-auto justify-content-center">
            <div class="container1 col-md-6 text-center">
                <a data-toggle="modal" data-target="#basicExampleModal" href="#"><img
                        class="img-responsive ytvideo col-md-12 align-self-center"
                        src="<?php echo get_bloginfo('template_directory'); ?>/images/pro.jpg">
                    <div class="play-button"><img class="img-responsive"
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/playbutton.png"></div>
                </a>

                <!-- <iframe frameBorder="0" class="ytvideo  col-md-12 align-self-center"  src="https://www.youtube.com/embed/cTOtd7D6Euw"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    ></iframe>
                </iframe> -->
            </div>

            <div class="col-md-6 align-self-center more-nabil-btn p-4">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut
                    fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                    quisquam est, qui dolorem ipsum quia dolor
                    sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat voluptatem.
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                    aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas

                    nulla pariatur?
                </p>

                <!-- <div class="mb-auto"> -->
                <button type="button" class="btn btn-primary nabil-button col-md-12 ">MORE ABOUT AMER NABIL</button>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">

    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">


        <div class="youtube-modal modal-content p-0 m-0">
            <iframe frameBorder="0" class="video-frame p-0 m-0  col-md-12 align-self-center"
                src="https://www.youtube.com/embed/cTOtd7D6Euw"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;"
                allowfullscreen></iframe>
            </iframe>
        </div>
    </div>
</div>
<script>
    $('.modal').on('hide.bs.modal', function () {
        var memory = $(this).html();
        $(this).html(memory);
    });
</script>