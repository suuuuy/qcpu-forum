<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QCPU - Forum</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/constants.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">

    <script type="text/javascript" src="<?= base_url('assets/js/jquery-1.11.3.min.js');?>"></script>
    <script src="<?=base_url('assets/js/vendor/modernizr.js');?>"></script>
</head>
<body>
    <div class="row container">

        <header class="row">
            <div class="column large-12 small-10 medium-11 text-center">
                <img class="qcpu-logo margintop10" src="<?=base_url('assets/img/banner.png');?>" alt="QCPU Logo">
            </div>
        </header>

        <?php
            if(!$this->session->userdata('stud_no')){
        ?>
                <nav class="top-bar margintop10" data-topbar role="navigation">
                    <ul class="title-area">

                        <li class="name">
                            <h1><a href="#">Forum</a></h1>
                        </li>
                        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>
                    <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#" data-reveal-id="login_modal">Sign In</a></li>
                            <li class="has-dropdown hide">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">link</a></li>
                                    <li><a href="#">link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Left Nav Section -->
                        <ul class="left">
                        </ul>
                    </section>
                </nav>
        <?php
            }else{
        ?>
                <nav class="top-bar margintop10" data-topbar role="navigation">
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="#">Quezon City Polytechnic University</a></h1>
                        </li>
                        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>
                    <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Annoucements</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="<?=base_url('main/logout');?>">logout</a></li>
                            <li class="has-dropdown hide">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">link</a></li>
                                    <li><a href="#">link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Left Nav Section -->
                        <ul class="left">
                        </ul>
                    </section>
                </nav>
        <?php
            }

        ?>

        <div class="row">
            <div class="column">
                <table>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <section class="column large-3 medium-4 small-5">

                <h2>News</h2>
                <ul>
                    <li>
                        <h3>Etiam suscipit et</h3>
                        <p>Rhoncus ac, lacinia, nisl. Aliquam gravida massa eu arcu. <a href="#">More...</a></p>
                    </li>
                    <li>
                        <h3>Fusce dolor tristique</h3>
                        <p>Sed eu eros imperdiet eros interdum blandit. Vivamus sagittis bibendum erat. Curabitur malesuada. <a href="#">More...</a></p>
                    </li>
                    <li>
                        <h3>Nunc pellentesque</h3>
                        <p>Sed vestibulum blandit nisl. Quisque elementum convallis purus. Suspendisse potenti. Donec nulla est, laoreet quis, pellentesque in. <a href="#">More...</a></p>
                    </li>
                </ul>

                <h2>Annoucements</h2>
                <ul>
                    <li>
                        <h3>Etiam suscipit et</h3>
                        <p>Rhoncus ac, lacinia, nisl. Aliquam gravida massa eu arcu. <a href="#">More...</a></p>
                    </li>
                    <li>
                        <h3>Fusce dolor tristique</h3>
                        <p>Sed eu eros imperdiet eros interdum blandit. Vivamus sagittis bibendum erat. Curabitur malesuada. <a href="#">More...</a></p>
                    </li>
                    <li>
                        <h3>Nunc pellentesque</h3>
                        <p>Sed vestibulum blandit nisl. Quisque elementum convallis purus. Suspendisse potenti. Donec nulla est, laoreet quis, pellentesque in. <a href="#">More...</a></p>
                    </li>
                </ul>

                <h2>Events</h2>
                <ul>
                    <li>
                        <h3>Etiam suscipit et</h3>
                        <p>Rhoncus ac, lacinia, nisl. Aliquam gravida massa eu arcu. <a href="#">More...</a></p>
                    </li>
                    <li>
                        <h3>Fusce dolor tristique</h3>
                        <p>Sed eu eros imperdiet eros interdum blandit. Vivamus sagittis bibendum erat. Curabitur malesuada. <a href="#">More...</a></p>
                    </li>
                    <li>
                        <h3>Nunc pellentesque</h3>
                        <p>Sed vestibulum blandit nisl. Quisque elementum convallis purus. Suspendisse potenti. Donec nulla est, laoreet quis, pellentesque in. <a href="#">More...</a></p>
                    </li>
                </ul>

            </section>
            <article class="column large-9 medium-8 small-7">
                <h2>Welcome to QCPU!</h2>
                <p><strong>Rational</strong> Quisque elementum convallis purus. Quisque pellentesque semper massa</p>
                <p>Suspendisse potenti. Donec nulla est, laoreet quis, pellentesque in, congue in, dui. Nunc rhoncus placerat augue. Donec justo odio, eleifend varius, volutpat venenatis, sagittis ut, orci. Donec nulla est, laoreet quis, pellentesque in, congue in, dui. Nunc rhoncus placerat augue. Donec justo odio, eleifend varius, volutpat venenatis, sagittis ut, orci. Nullam et orci in erat viverra ornare. Nunc pellentesque.</p>
                <p>Sed vestibulum blandit nisl. Quisque elementum convallis purus. Quisque pellentesque semper massa:</p>
                <h3>Example Unordered List</h3>
                <ul>
                    <li><a href="http://www.free-css.com/free-css-templates">Suspendisse quis gravida massa felis.</a></li>
                    <li><a href="http://www.free-css.com/free-css-templates">Vivamus sagittis bibendum erat.</a></li>
                    <li><a href="http://www.free-css.com/free-css-templates">Nullam et orci in erat viverra ornare.</a></li>
                    <li><a href="http://www.free-css.com/free-css-templates">Suspendisse quis gravida massa felis.</a></li>
                    <li><a href="http://www.free-css.com/free-css-templates">Curabitur malesuada turpis nec ante.</a></li>
                </ul>
                <h3>Example Blockquote</h3>
                <blockquote>
                    <p>Aliquam gravida massa eu arcu. Fusce mollis tristique sem. Sed eu eros imperdiet eros interdum blandit. Vivamus sagittis bibendum erat. Curabitur malesuada turpis nec ante. Suspendisse quis felis. Suspendisse potenti. Nullam et orci in erat viverra ornare. Nunc pellentesque. Sed vestibulum blandit nisl. Quisque elementum convallis purus.</p>
                </blockquote>
                <h3>Example Table</h3>
                <table>
                    <tbody><tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                    <tr class="rowA">
                        <td>December 1, 2006</td>
                        <td>Sed vestibulum blandit</td>
                        <td>Vivamus sollicitudin dolor sit amet eros. Vivamus ligula. Sed pretium turpis eu ipsum. Sed rutrum sapien id arcu.</td>
                    </tr>
                    <tr class="rowB">
                        <td>November 28, 2006</td>
                        <td>Augue non nibh</td>
                        <td>Nam adipiscing urna ac consequat dignissim massa est sodales sem.</td>
                    </tr>
                    <tr class="rowA">
                        <td>November 23, 2006</td>
                        <td>Fusce ut diam bibendum</td>
                        <td>Vestibulum quis urn nulla facilis nam malesuada cursus turpis.</td>
                    </tr>
                    <tr class="rowB">
                        <td>November 21, 2006</td>
                        <td>Maecenas et ipsum</td>
                        <td>Vivamus mi lectus gravida scelerisque, ultrices vitae cursus in neque.</td>
                    </tr>
                    </tbody>
                </table>
            </article>
        </div>

        <footer class="text-center">Copyright 2015 stressrelease.com. Designed by Stress</footer>

    </div>

    <!--  modal  -->
    <div id="login_modal" class="reveal-modal tiny" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Login</h2>

        <form action="<?=base_url('index.php/main/login');?>" method="post">
            <label for="inp_username">Username</label>
            <input type="text" id="inp_username" name="inp_username">
            <label for="inp_password">Password</label>
            <input type="password" id="inp_password" name="inp_password">
            <button type="submit">Login</button>
        </form>
        
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

    <script src="<?=base_url('assets/js/vendor/jquery.js');?>"></script>
    <script src="<?=base_url('assets/js/foundation.min.js');?>"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>