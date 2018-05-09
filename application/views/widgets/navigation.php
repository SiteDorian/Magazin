<!-- navigation -->
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li><a href="<?=site_url('welcome')?>" class="<?php if ($active=='home') echo ' act'; ?>">Acasa</a></li>


                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle <?php if ($active=='products') echo ' act'; ?>" data-toggle="dropdown">Produse <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">

                                <?php

                                if ($status!==200)
                                {
                                    echo "Internal server error.";
                                }
                                else
                                {
                                    foreach($categories as $key => $value):
                                        if ($value['id_parent']==null)
                                        {
                                            $id_curent = $value['id'];

                                            ?>
                                            <div class="col-sm-3">
                                                <ul class="multi-column-dropdown">
                                                    <h6>
                                                        <a href="#Parent_category">
                                                            <?= $value['name'] ?>
                                                        </a>

                                                    </h6>

                                                    <?php
                                                    foreach ($content as $k => $val) {
                                                        if ($val['id_parent']==$id_curent)
                                                        {
                                                            $cat=$val['name'];
                                                            echo "<li><a href='".site_url('products')."?category=$cat'>". $val['name']."</a></li>";
                                                        }
                                                    }
                                                    ?>

                                                </ul>
                                            </div>

                                        <?php } ?>





                                    <?php endforeach; } ?>




                                <!--
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Mobiles</h6>
                                        <li><a href="products.html">Telefoane mobile</a></li>
                                        <li><a href="products.html">Mp3 Players </a></li>
                                        <li><a href="products.html">Popular Models</a></li>
                                        <li><a href="products.html">All Tablets</a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Accessories</h6>
                                        <li><a href="products1.html">Laptop</a></li>
                                        <li><a href="products1.html">Desktop</a></li>
                                        <li><a href="products1.html"><i>Summer Store</i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-2">
                                    <ul class="multi-column-dropdown">
                                        <h6>Home</h6>
                                        <li><a href="products2.html">Tv</a></li>
                                        <li><a href="products2.html">Camera</a></li>
                                        <li><a href="products2.html">AC</a></li>
                                        <li><a href="products2.html">Grinders</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w3ls_products_pos">
                                        <h4>30%<i>Off/-</i></h4>
                                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                                    </div>
                                </div>
                                -->
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>


                    <li><a href="about.html">About Us</a></li>
                    <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="icons.html">Web Icons</a></li>
                            <li><a href="codes.html">Short Codes</a></li>
                        </ul>
                    </li>
                    <li><a href="mail.html">Mail Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->