<div class="fluid-grid space-rows">
    <div class="row">
        <div class="col-2">
            <div class="inner">
                <h2>Kickbone v<?= KICKBONE_VERSION ?></h2>
                <table>
                    <thead>
                        <tr>
                            <td>Variable</td>
                            <td>Value</td>
                            <td>Description</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BASE</td>
                            <td><input type="text" value="<?= BASE ?>"></td>
                            <td>Path to the Webroot</td>
                        </tr>
                        <tr>
                            <td>APP_SUBFOLDER</td>
                            <td><strong><?= APP_SUBFOLDER ?></strong></td>
                            <td>Subdirectory of the Apache server where the installation is located. Null means root!</td>
                        </tr>
                        <tr>
                            <td>MVC_DEFAULT_ACTION</td>
                            <td><strong><?= MVC_DEFAULT_ACTION ?></strong></td>
                            <td>Default action for a controller if no one has been set. Standard is 'index'.</td>
                        </tr>
                        <tr>
                            <td>DB_HOST</td>
                            <td><strong><?= DB_HOST ?></strong></td>
                            <td>Host for the Database</td>
                        </tr>
                        <tr>
                            <td>DB_USERNAME</td>
                            <td><strong><?= DB_USERNAME ?></strong></td>
                            <td>User for the Database</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-2">
            <div class="inner">
                <h2 class="has-sub">Access tracer</h2>
                <p class="sub"><?= APP_LOG_PATH ?>access.log</p>
                <code>
                    <?php
                        $cut = explode("[", file_get_contents(APP_LOG_PATH . 'access.log'));
                        echo implode("</span><br><span>[", $cut);
                    ?>
                </code>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1">
            <div class="inner">
                <h2 class="has-sub">Errors</h2>
                <p class="sub"><?= APP_LOG_PATH ?>error.log</p>
                <code>
                    <?php
                        $cut = explode("[", file_get_contents(APP_LOG_PATH . 'error.log'));
                        echo implode("</span><br><span>[", $cut);
                    ?>
                </code>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="inner">
                <h2 class="has-sub">Controllers</h2>
                <p class="sub"><?= APP_CONTROLLER_PATH ?></p>
                <ul>
                    <?php
                        foreach(glob(APP_CONTROLLER_PATH.'/*Controller.php') as $file) {
                            ?>
                                <li><?= basename($file) ?></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <div class="inner">
                <h2 class="has-sub">Views</h2>
                <p class="sub"><?= APP_VIEW_PATH ?></p>
                <ul>
                    <?php
                        foreach(scandir(APP_VIEW_PATH) as $folder) {
                            if($folder != '.' && $folder != '..' && $folder != 'head.php' && $folder != 'foot.php') {
                            ?>
                                <li><?= $folder ?></li>
                                <ul>
                                    <?php
                                    foreach(scandir(APP_VIEW_PATH . $folder) as $subfolder) {
                                        if($subfolder != '.' && $subfolder != '..') {
                                        ?>
                                            <li><?= $subfolder ?></li>
                                        <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            <?php
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <div class="inner">
                <h2 class="has-sub">Models</h2>
                <p class="sub"><?= APP_MODEL_PATH ?></p>
                <ul>
                    <?php
                        foreach(glob(APP_MODEL_PATH.'/*Model.php') as $file) {
                            ?>
                                <li><?= basename($file) ?></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
