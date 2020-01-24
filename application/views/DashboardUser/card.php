<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<div class="bg-light" data-stellar-background-ratio="0.5" >
    <div class="overlay"></div>
        <div class="container container-padding" >
            <div class="my-3 py-3 text-center"> 
                <div class="row mb-3">
                    <div class="col">
                        <!-- <h1>Our Team</h1>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias reprehenderit omnis aspernatur impedit in, tempora, laborum quisquam qui fugit nostrum obcaecati quibusdam vel minima sunt necessitatibus ut eaque pariatur libero aut. Earum ab culpa, unde magni doloribus autem quis deleniti voluptate tempore dolore obcaecati fuga, porro minima, asperiores nihil nesciunt quia quam. Fugiat nemo quaerat, sint dicta asperiores quod ducimus ullam suscipit repellat sequi recusandae impedit nostrum a inventore sunt ipsam harum. Soluta dolore ducimus hic voluptate vero dicta, dignissimos quis fugiat minus earum illo voluptatibus mollitia dolores enim nulla atque blanditiis eveniet laborum explicabo nobis aut! Inventore, nostrum porro!</p> -->

                    </div>
                </div>
                <div class="row align-center">
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                        <div class="card h-100 bg-secondary text-white card_menu">
                            <div class="card-body my-auto" >
                            <i class="icon-bullhorn " style="font-size: 48px; color: #fff;"></i>
                               <h4 class="inner" style="font-size: 16px;">Upload Vacancy</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                      

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                            <div class="card h-100 bg-success text-white card_menu">
                                <div class="card-body my-auto">
                                <i class="icon-file " style="font-size: 48px; color: #fff;"></i>
                                   <h4 class="inner" style="font-size: 16px;">Company Profile</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                            <div class="card h-100 bg-warning text-white card_menu">
                                <div class="card-body my-auto">
                                <i class="icon-spinner " style="font-size: 48px; color: #fff;"></i>
                                     <h4 class="inner" style="font-size: 16px;">Search Candidate</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                            <div class="card h-100 bg-transparent text-primary card_menu">
                                <div class="card-body my-auto bg-transparent">
                                <i class="icon-user " style="font-size: 48px; color: #278954;"></i>
                                   <h4 class="inner" style="color: #278954; font-size: 16px;">View Profile</h4>
                                   
                                </div>
                            </div>
                        </a>
                    </div>

                     
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                        <div class="card h-100 bg-info text-white card_menu">
                            <div class="card-body my-auto" >
                            <i class="icon-hourglass " style="font-size: 48px; color: #fff;"></i>
                               <h4 class="inner">Remaining Balance</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                      

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                            <div class="card h-100 bg-muted text-white card_menu">
                                <div class="card-body my-auto">
                                <i class="icon-podcast " style="font-size: 48px; color: #912151;"></i>
                                   <h4 class="inner" style="font-size: 16px; color: #912151;">Advertisement</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                            <div class="card h-100 bg-dark text-white card_menu">
                                <div class="card-body my-auto">
                                <i class="icon-search " style="font-size: 48px; color: #fff;"></i>
                                     <h4 class="inner" style="font-size: 16px;">Searh Job</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-3 jumps" style="height: 100px; ">
                        <a href="#">
                            <div class="card h-100 bg-danger text-primary card_menu">
                                <div class="card-body my-auto bg-transparent">
                                <i class="icon-file-text " style="font-size: 48px; color: #fff;;"></i>
                                   <h4 class="inner" style="color: #fff; font-size: 16px;">Resume</h4>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                
            </div>
     
         </div>
    </div>


    <script>
        $(document).ready(function(){
            $('.jumps').hover(
                function(){
                    $(this).animate({
                        marginTop: "-=1%",
                    }, 200);
                }, 

                function(){
                    $(this).animate({
                        marginTop: "0%",
                    }, 200);
                }
            )
        });
    </script>