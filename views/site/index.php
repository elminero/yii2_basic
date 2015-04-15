<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>composer.phar</h2>

                <p>Download the composer.phar executable or use the installer.</p>
                <p>$ curl -sS https://getcomposer.org/installer | php</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>MySQL Workbench for use with Vagrant</h2>

                <p>
                    SSH Hostname: 127.0.0.1:2222<br />

                    SSH Username: vagrant<br />

                    SSH Key File: C:\vag\web\puphpet\files\dot\ssh\id_rsa<br />

                    MySQL Server Port: 3306<br />

                    Username: root<br />

                    Password when asked: 123<br />
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Using Gii with Vagrant</h2>

                <p>
                    config/web.php<br />

                    if (YII_ENV_DEV) {<br />
                    // configuration adjustments for 'dev' environment<br />
                    $secure = ['allowedIPs' => ['*']];<br />

                    $config['bootstrap'][] = 'debug';<br />
                    $config['modules']['debug'] = ['class' => 'yii\debug\Module'] + $secure;<br />

                    $config['bootstrap'][] = 'gii';<br />
                    $config['modules']['gii'] = ['class' => 'yii\gii\Module'] + $secure;<br />
                    }<br />


                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
