<?php
/* Smarty version 3.1.32, created on 2018-10-02 05:15:28
  from 'C:\Users\Infuthron\PhpstormProjects\Portofolio\private\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb2e2d0d6c934_25870813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e6957ab1df23950595122563d9b983de835c3ff' => 
    array (
      0 => 'C:\\Users\\Infuthron\\PhpstormProjects\\Portofolio\\private\\views\\home.tpl',
      1 => 1538450126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb2e2d0d6c934_25870813 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top">
    <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#section1">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section2">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section3">Contact</a>
            </li>
        </ul>
    </div>
</nav>

</div>
<div class="container-fluid custom-class h-100 p-1">
    <div class="row pt-5">
        <div class="col-sm-12 justify-content-center mt-3  text-light stroke">
            <h2 class="pb-3 rounded-left bg-secondary float-right p-1  border border-dark border-thickness">Aleksander Czajka</h2>
        </div>
    </div>
    <div class="row pt-5 pb-5 custom-padding">
        <div class="col-sm-9"></div>
        <div class="col-sm-3 container p-0">
            <div class="container-fluid pt-4">
                <img src="images/portfoto.jpg" class="rounded-left float-right bg-secondary border border-dark border-thickness" alt="Cinque Terre" height="300" width="250">
            </div>
        </div>
    </div>
    <div class="container-fluid p-5"></div>
    <div class="container-fluid p-5"></div>
    <div class="container-fluid p-5"></div>
    <div class="container-fluid p-5"></div>

</div>
<div class="container-fluid text-center bg-secondary pt-5" id="section1">
    <h1 class="pt-5">About Me</h1>
    <div class="row pt-5">
        <div class="col-md-4">
            <h3>Who am I professionally?</h3>
            <p>I'm a lover of all kinds of problem-solving and optimization. No matter if in code or my day-to-day life. Creative solutions are just my thing and being a part of professional community seems like a dream come true. </p>
            <br>
            <h6>My pros would be:</h6>
            <hr>
            <ul>
                <li>I'll always finish my work</li>
                <li>Treating my work utmost seriously</li>
                <li>There's nothing I'd like to do more than learn new things</li>
                <li>And I'm not afraid of asking questions</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h4>Student at:</h4>
            <img src="images/ma_img1.jpg" alt="Mediacollage Amsterdam Logo">
        </div>
        <div class="col-md-4 pt-5">
            <h3>Who am I privately?</h3>
            <p>I'm a Polish immigrant, a real family-person and I even in my off-time I still love to learn new things. As a person I must have a creative outlet, otherwise I bore myself to death.</p>
            <br>
            <p>"Persistently motivated" would be a good fraze to describe me. It means that even if I drop something... I'm going to pick it back up and go on further trying.</p>
        </div>
    </div>
    <h2 class="pt-5">My areas of expertise</h2>
    <div class="row pt-5 pb-5">
        <div class="col-xl-3">
        </div>
        <div class="col-xl-1 p-3">
            <img src="images/html_logo.png" alt="html logo" height="128" >
        </div>
        <div class="col-xl-1 p-3"">
            <img src="images/css_logo.png" alt="css logo" height="128" >
        </div>
        <div class="col-xl-1 p-3"">
            <img src="images/js_logo.png" alt="javascript logo" height="128">
        </div>
        <div class="col-xl-1 p-3"">
            <img src="images/bootstrap_logo.png" alt="bootstrap logo" height="128">
        </div>
        <div class="col-xl-1 p-3"">
            <img src="images/sql_logo.jpg" alt="mysql logo" height="128">
        </div>
        <div class="col-xl-1 p-5">
            <img src="images/php_logo.png" alt="php logo" height="100">
        </div>
        <div class="col-xl-3">
        </div>
    </div>
</div>
<div class="container-fluid text-center text-light bg-dark pt-5 pb-5" id="section2">
    <h1>My Projects</h1>
    <hr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
        <div class="card text-dark m-5" size="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['project']->value[1];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['project']->value[2];?>
</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value[3];?>
" class="card-link">GitHub Link</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value[4];?>
" class="card-link">Blog Link</a>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <hr>
</div>
<div class="container-fluid bg-secondary pt-5 pb-5" id="section3">
    <h2>Contact</h2>
    <hr>
    <h3>You can find me at:</h3>
    <div class="row pt-5 pb-5">
        <div class="col-sm-1"></div>
        <div class="col-sm-1 p-5">
            <a href="mailto:AleksanderCzaj@gmail.com"><img src="images/gmail_logo.png" height="50"></a>
        </div>
        <div class="col-sm-1 p-5">
            <a href="https://github.com/Infuthron" target="_blank"><img src="images/github_logo.png" height="50"></a>
        </div>
        <div class="col-sm-9"></div>
    </div>
</div>
<?php }
}
