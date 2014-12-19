<?php

/* MSMsBundle:User:index.html.twig */
class __TwigTemplate_03e3b1d102562f261ddb53b10d0a45132d6729d5628800859d940e279f1ad73c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo twig_include($this->env, $context, "MSMsBundle:User:header.html.twig");
        echo "
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msms/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msms/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msms/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msms/css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"displayed\"><div class=\"container theme-showcase\" id=\"mainDiv\"><style type=\"text/css\">
    body{
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-bottom: 0px;
        padding-top: 65px;

    }
    .footerMine{display: none;}
    .homepage_content{background-color: rgba(255,255,255); background-color: rgba(255,255,255,.7); min-height: 800px;}
    .home_top_margin{padding-top: 60px;}
    .welcome_title{color: #fff; text-align: right;}
    .home_login_row{padding-bottom: 10px; color: #4e4e4e; text-align: right;}
    .home_login_row a,.homepage_content_footer a{color: #4e4e4e !important;}
    .homepage_content_footer{color:#8c7f8a}

    #displayed{margin-top: -13px;}
    .tms_list{list-style: none; padding: 0px;}
    .tms_list li{margin-left: 15px; float: left;}

    .create_profile_btn{width: 202px;}

    @media (max-width: 767px) {
        .welcome_title{text-align: center;}
        .home_login_row{text-align: left;}
    }

    @media (max-width: 991px) {
        .tms_list{display: inline-block;}
    }

</style>
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 welcome_title home_top_margin\">
                    <div class=\"row\">
                    <br>
                    <br>
                        <h2>Welcome to TheMusicSite.com</h2>

                        <h4>The world's music social network</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1\"></div>
        <div class=\"col-lg-4 col-md-5 col-sm-5 col-xs-12 homepage_content home_top_margin\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\"></div>
                <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                    <h3>Log In</h3>
                </div>
            </div>
            <div class=\"row home_login_row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                    Username
                </div>
                <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                    <input type=\"text\" class=\"form-control input-sm\">
                </div>
            </div>
            <div class=\"row home_login_row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                    Password
                </div>
                <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                    <input type=\"text\" class=\"form-control input-sm\">
                </div>
            </div>
            <div class=\"row home_login_row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs hidden-sm\">&nbsp;</div>
                <div class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12 text-right\">
                    <div class=\"row\">
                        <div class=\"col-md-7 col-sm-12 text-left text-right-sm text-right-xs\">
                            <input type=\"checkbox\"> Remember Me
                        </div>
                        <div class=\"col-md-5 col-sm-12 text-right text-left-xs text-left-sm\">
                            <button class=\"btn btn-success\" onclick=\"window.open('../../prototype-general-flat/prototypes/index.html#Member_Homepage','_self')\">&nbsp;Log In&nbsp;</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs hidden-sm\">&nbsp;</div>
                <div class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12 text-left-sm\">
                    <a href=\"../../prototype-general-flat/prototypes/index.html#Forgot_Password_Page\">Forgot Password?</a> | <a href=\"../../prototype-general-flat/prototypes/index.html#Forgot_Username_Page\">Forgot Username?</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h3>Join for Free</h3>
                </div>
            </div>
            <br>
            <div class=\"row\">
                <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\"><div class=\"col-md-8 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-3 text-center-xs\">            
                    <button class=\"btn btn-success create_profile_btn\" onclick=\"window.open('../../prototype-general-flat/prototypes/index.html#Welcome_Step_1','_self')\">&nbsp;Create a FREE Profile&nbsp;</button>
                </div></a>
            </div>
            <div class=\"row\">
                <div class=\"col-md-8 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-3 text-center-xs\">
                    <br>
                    <p>Or</p>
                    <br>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-8 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-3 text-center-xs\">
                    <a href=\"../../prototype-general-flat/prototypes/index.html#Welcome_Step_1\"><img src=\"/musicsite/web/bundles/msms/images/home_twitter_signup.jpg\" alt=\"\"></a>
                    <p></p>
                    <a href=\"../../prototype-general-flat/prototypes/index.html#Welcome_Step_1\"><img src=\"/musicsite/web/bundles/msms/images/home_fb_signup.jpg\" alt=\"\"></a><br>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 col-xs-12 col-md-offset-3 text-center-sm text-center-xs homepage_content_footer\">
                    <hr style=\"border-bottom:1px solid #666;\">
                    <div class=\"row\">
                        <ul class=\"tms_list\">
                            <li><a href=\"../../prototype-general-flat/prototypes/index.html#Privacy_Policy_Page\">Privacy Policy</a></li>
                            <li><a href=\"../../prototype-general-flat/prototypes/index.html#Terms_and_Conditions_Page\">Terms &amp; Conditions</a></li>
                            <li><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Overview\">Job Opps</a></li>
                            <li><a href=\"../../prototype-general-flat/prototypes/index.html#Invite_a_Friend_Pop_Up\">Invite a Friend</a></li>
                            <li><a href=\"../../prototype-general-flat/prototypes/index.html#Contact_Us_Page\">Contact Us</a></li>
                            <li><a href=\"../../prototype-advertising-flat/prototypes/index.html#Advertise_Home\">Advertise</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12 col-xs-12 col-md-offset-3 text-center-sm text-center-xs homepage_content_footer\">
                    <br>
                    © Copyright 2014 TheMusicSite.com
                      <br>
                      <br>
                      <br>
                    Image Credit: www.photography.mattfield.com
                </div>
            </div>

        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\"></div>
</div></div></div>
";
        // line 158
        echo twig_include($this->env, $context, "MSMsBundle:User:footer.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "MSMsBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 158,  160 => 111,  56 => 9,  53 => 8,  47 => 5,  43 => 4,  39 => 3,  34 => 2,  31 => 1,  27 => 8,  23 => 7,  21 => 1,);
    }
}
