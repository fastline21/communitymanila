<?php
// Template Name: Home
get_header();
?>
<div id="banner"></div>
<div id="about" class="section">
    <div class="container">
        <h1>About Us</h1>
        <div class="content shadow rounded"> 
            <div class="row">
                <div class="col-lg-6">
                    <p class="text text-justify">
                        Community Manila is for the crazy ones, the genius and change maker. People who see things differently, love apples and Amby. 
                        You can meet your clients in our private meeting space, 
                        bounce ideas off other communities. 
                        We are in the mission to empower starts ups communities providing the resources and learning opportunities to scale ideas and business for long term success. 
                        We’re still growing.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/2.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</div>
<div id="packages" class="section">
    <div class="container">
        <h1>Packages</h1>
        <div class="card-deck">
            <?php
            $packagesArray = array(
                array(
                    "Open Space",
                    "4,777.00 php",
                    array(
                        "Fiber Fast Internet",
                        "Free Coffee",
                        "Artist Crafted Table",
                        "Well Lighted"
                    )
                ),
                array(
                    "Co Space",
                    "7,777.00 php",
                    array(
                        "Exclusive Desk Station",
                        "Fiber Fast Station",
                        "Free Coffee",
                        "Artist Crafted Table",
                        "Well Lighted"
                    )
                ),
                array(
                    "D Desk",
                    "11,777.00 php",
                    array(
                        "Free use of iMac",
                        "Exclusive Desk Station",
                        "Fiber Fast Station",
                        "Free Coffee",
                        "Artist Crafted Table",
                        "Well Lighted"
                    )
                ),
                array(
                    "Team",
                    "37,777.00 php",
                    array(
                        "Start Right Away",
                        "Private Office Space",
                        "Free Business Address",
                        "2-4 Persons",
                        "Fiber Dedicated Wifi Network",
                        "Free Coffee",
                        "Artist Crafted Tables",
                        "and Chairs",
                        "7hrs Meeting Room Use"
                    )
                )
            );
            for ($i = 0; $i < 4; $i++) {
                ?>
                <div class="card shadow rounded">
                    <div class="card-header"><?php echo $packagesArray[$i][0]; ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $packagesArray[$i][1]; ?></h5>
                        <p class="card-text">
                            <ul>
                                <?php
                                for ($item = 0; $item < count($packagesArray[$i][2]); $item++) {
                                    ?>
                                    <li><?php echo $packagesArray[$i][2][$item]; ?></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<div id="faqs" class="section">
    <div class="container">
        <h1>FAQs</h1>
        <?php
        $faqsArray = array(
            array(
                "faqs1",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer congue in magna eget ultrices. Nulla sit amet odio maximus, vehicula tellus tristique, egestas ex. Vivamus lacinia eget nibh et sodales. Praesent blandit ante nisi, non euismod lorem tincidunt a. Vivamus vel scelerisque elit. Mauris vehicula augue eget sem dictum, et tristique velit finibus. Vestibulum tempus, mi eu venenatis rutrum, ex lorem porta lacus, ut lobortis libero justo nec ex. Nullam non ipsum venenatis, lobortis nunc id, consectetur sem. Ut arcu mauris, congue in odio sit amet, ornare vulputate augue. Pellentesque at dictum neque. Nulla aliquam volutpat eleifend. Duis nec erat et velit sagittis tincidunt ut eu neque."
            ),
            array(
                "faqs2",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer congue in magna eget ultrices. Nulla sit amet odio maximus, vehicula tellus tristique, egestas ex. Vivamus lacinia eget nibh et sodales. Praesent blandit ante nisi, non euismod lorem tincidunt a. Vivamus vel scelerisque elit. Mauris vehicula augue eget sem dictum, et tristique velit finibus. Vestibulum tempus, mi eu venenatis rutrum, ex lorem porta lacus, ut lobortis libero justo nec ex. Nullam non ipsum venenatis, lobortis nunc id, consectetur sem. Ut arcu mauris, congue in odio sit amet, ornare vulputate augue. Pellentesque at dictum neque. Nulla aliquam volutpat eleifend. Duis nec erat et velit sagittis tincidunt ut eu neque."
            ),
            array(
                "faqs3",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer congue in magna eget ultrices. Nulla sit amet odio maximus, vehicula tellus tristique, egestas ex. Vivamus lacinia eget nibh et sodales. Praesent blandit ante nisi, non euismod lorem tincidunt a. Vivamus vel scelerisque elit. Mauris vehicula augue eget sem dictum, et tristique velit finibus. Vestibulum tempus, mi eu venenatis rutrum, ex lorem porta lacus, ut lobortis libero justo nec ex. Nullam non ipsum venenatis, lobortis nunc id, consectetur sem. Ut arcu mauris, congue in odio sit amet, ornare vulputate augue. Pellentesque at dictum neque. Nulla aliquam volutpat eleifend. Duis nec erat et velit sagittis tincidunt ut eu neque."
            ),
            array(
                "faqs4",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer congue in magna eget ultrices. Nulla sit amet odio maximus, vehicula tellus tristique, egestas ex. Vivamus lacinia eget nibh et sodales. Praesent blandit ante nisi, non euismod lorem tincidunt a. Vivamus vel scelerisque elit. Mauris vehicula augue eget sem dictum, et tristique velit finibus. Vestibulum tempus, mi eu venenatis rutrum, ex lorem porta lacus, ut lobortis libero justo nec ex. Nullam non ipsum venenatis, lobortis nunc id, consectetur sem. Ut arcu mauris, congue in odio sit amet, ornare vulputate augue. Pellentesque at dictum neque. Nulla aliquam volutpat eleifend. Duis nec erat et velit sagittis tincidunt ut eu neque."
            ),
            array(
                "faqs5",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer congue in magna eget ultrices. Nulla sit amet odio maximus, vehicula tellus tristique, egestas ex. Vivamus lacinia eget nibh et sodales. Praesent blandit ante nisi, non euismod lorem tincidunt a. Vivamus vel scelerisque elit. Mauris vehicula augue eget sem dictum, et tristique velit finibus. Vestibulum tempus, mi eu venenatis rutrum, ex lorem porta lacus, ut lobortis libero justo nec ex. Nullam non ipsum venenatis, lobortis nunc id, consectetur sem. Ut arcu mauris, congue in odio sit amet, ornare vulputate augue. Pellentesque at dictum neque. Nulla aliquam volutpat eleifend. Duis nec erat et velit sagittis tincidunt ut eu neque."
            )
        );
        for ($i = 0; $i <= count($faqsArray) - 1; $i++) {
            ?>
            <p>
                <a class="link" data-toggle="collapse" href="#<?php echo $faqsArray[$i][0]; ?>" role="button" aria-expanded="false" aria-controls="<?php echo $faqsArray[$i][0]; ?>"><?php echo $faqsArray[$i][1]; ?></a>    
            </p>
            <div class="collapse" id="<?php echo $faqsArray[$i][0]; ?>">
                <div class="card card-body">
                    <?php echo $faqsArray[$i][2]; ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div id="contact-us" class="section">
    <div class="container">
        <h1>Contact Us</h1>
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/location-sample.png" class="img-fluid image shadow" />
            </div>
            <div class="col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</div>
<a href="#" class="back-to-top">
    <i class="fa fa-arrow-up"></i>
</a>
<?php
get_footer();
?>