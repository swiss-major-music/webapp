<header>
    <div class="main-navigation skin-profile fade-fast">
        <div class="pull-left">
            <ul class="horizontal">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#genre">Genre</a>
                </li>
                <li>
                    <a href="#artists">Artists</a>
                </li>
                <li>
                    <a href="#clubs">Clubs</a>
                </li>
                <li>
                    <a href="#about-us">About us</a>
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <ul class="horizontal iconic">
                <li>
                    <a href="#notifications" title="View your notifications"><i class="icon-stack"></i></a>
                </li>
                <li>
                    <a href="#settings" title="Edit your setting<s></s>"><i class="icon-settings"></i></a>
                </li>
            </ul>
        </div>
    </div>
</header>
<main>
    <div class="content-wrapper center-wrapper">
        <div class="layout-artist">
            <div class="header-wrapper">
                <div class="grid">
                    <div class="row">
                        <div class="col-2">
                            <img src="http://placehold.it/280x280x" alt="" />
                        </div>
                        <div class="col-4 artist-col">
                            <h1><?= render($data, 'artistname') ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar pull-left">
                <p class="bio"><?= render($data, 'bio') ?></p>
                <!-- module 'socialNavigation' -->
                <ul class="indented social-navigation">
                    <li>
                        <a href="#sound"><i class="icon-soundcloud soundcloud"></i> Soundcloud</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-facebook2 facebook"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-twitter twitter"></i> Twitter</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-tumblr tumblr"></i> Tumblr</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-foursquare foursquare"></i> Foursquare</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-mail4 mail"></i> E-Mail</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-youtube3 youtube"></i> YouTube</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-instagram instagram"></i> Instagram</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-flickr2 flickr"></i> Flickr</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-vimeo vimeo"></i> Vimeo</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-lastfm lastfm"></i> Last FM</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-pinterest pinterest"></i> Pinterest</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-xing2 xing"></i> Xing</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-safari website"></i> Website</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-blogger2 blogger"></i> Blogger</a>
                    </li>
                    <li>
                        <a href="#sound"><i class="icon-google-plus googleplus"></i> Google+</a>
                    </li>
                </ul>
            </div>
            <div class="side-content pull-left">
                <div class="row">
                    <div class="bio tile tile-mid">
                        <h3>Bio</h3>
                    </div>
                    <div class="contact tile tile-mid">
                        <h3>Kontakt</h3>
                        <form id="contact_userxy" action="#" method="post">
                            <input type="text" name="name" placeholder="Vorname Nachname" required>
                            <input type="text" name="why" placeholder="Grund" required>
                            <textarea name="content" rows="8" cols="40" placeholder="Deine Nachricht"></textarea>
                            <input type="submit" class="btn btn-skin" value="Senden">
                        </form>
                    </div>
                    <div class="image tile tile-mid">

                    </div>
                </div>
                <div class="row">
                    <div class="subscribe tile tile-mid">
                        <h3>Abos</h3>
                    </div>
                    <div class="contact tile tile-large">
                        <h3>Kontakt</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
