<?php // var_dump(Request::segment(1),Request::url(), Request::is('a')); ?>
<!-- Fixed navbar -->
<div role="navigation" class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                BIKEPOLO TOYRNAMET
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo Request::segment(1) == '/' ? 'active' : ''; ?>">
                    <a href="/"><?php echo trans('Home'); ?></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Challonge
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Tournament</li>
                        <li>
                            <a href="/challonge/tournaments">
                                <?php echo trans('List tournaments'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="/challonge/tournaments/add">
                                <?php echo trans('Add tournament'); ?>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>
<!--							<li class="<?php echo Request::segment(1) == '/ubicacion' ? 'active' : ''; ?>"><a href="/ubicacion">Ubicación</a></li>
            <li class="<?php echo Request::segment(1) == '/tienda' ? 'active' : ''; ?>"><a href="/tienda">Tienda</a></li>-->
            </ul>

            <?php if (!empty(Auth::user())): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                            echo Auth::user()->username;
                            //if ($current_user['AppUser']['is_admin']) {
                            //    echo ' (admin)';
                            //}
                            ?>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/profile"><?php echo trans('My profile'); ?></a></li>
                            <li class="divider"></li>
                            <li><a href="/logout"><?php echo trans('Logout'); ?></a></li>
                        </ul>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/login"><?php echo trans('Login'); ?></a></li>
                </ul>
            <?php endif; ?>
        </div> 
    </div>  
</div>  

