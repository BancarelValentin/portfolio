<?php

/* base.html.twig */
class __TwigTemplate_802bf7cc1c5f7cde45241cdd68da35c36e739c7f559e4f9933649db2d7052a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--[if IE 7]>                  <html class=\"ie7 no-js\" lang=\"fr\">     <![endif]-->
<!--[if lte IE 8]>              <html class=\"ie8 no-js\" lang=\"fr\">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class=\"not-ie no-js\" lang=\"fr\">  <!--<![endif]-->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" /> 
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta name=\"author\" content=\"BANCAREL Valentin\">
        ";
        // line 11
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "        
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        <!-- HTML5 Shiv + detect touch events -->
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
        <!-- HTML5 video player -->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/video.min.js"), "html", null, true);
        echo "\"></script>
        <script>_V_.options.flash.swf = '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/video-js.swf"), "html", null, true);
        echo "';</script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header id=\"header\" class=\"container clearfix\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("portefolio_homepage");
        echo "\" id=\"logo\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/images/logo.png"), "html", null, true);
        echo "\" alt=\"Bancarel Valentin\">
            </a>
            <nav id=\"main-nav\">
                <ul>
                    <li";
        // line 33
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "acceuil")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("portefolio_homepage");
        echo "\" data-description=\"hello\">Acceuil</a>
                    </li>

                    <li";
        // line 37
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "cv")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("portefolio_cv");
        echo "\" data-description=\"cv\">Curiculum vitae</a>
                    </li>

                    <li";
        // line 41
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "real")) {
            echo " class='current'";
        }
        echo ">
                        <a data-description=\"realisations\">Travaux</a>
                        <ul>
                            <li>
                                <a href='";
        // line 45
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 1));
        echo "'>1ere annee</a>
                            </li>

                            <li>
                                <a href='";
        // line 49
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 2));
        echo "'>2eme annee</a>
                            </li>

                            <li>
                                <a href='";
        // line 53
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 0));
        echo "'>Travaux personnel</a>
                            </li>
                        </ul>
                    </li>

                    <li";
        // line 58
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "veille")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("portefolio_veille");
        echo "\" data-description=\"raspberry\">Veille techno</a>
                    </li>

                    <li";
        // line 62
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "contact")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("portefolio_contact");
        echo "\" data-description=\"une question ?\">Contact</a>
                    </li>
                    
                    ";
        // line 66
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "rpi")) {
            // line 67
            echo "                        <li class='current'>
                            <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("admin_rpi_homepage");
            echo "\" data-description=\"raspberry\">administration RPI</a>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("admin_rpi_setReveil");
            echo "\">Regler reveil</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("admin_rpi_reveil");
            echo "\">Allumer reveil</a>
                                </li>
                            </ul>
                        </li>
                    ";
        }
        // line 79
        echo "                </ul>
            </nav>
        </header><!-- end #header -->


        <section id=\"content\" class=\"container clearfix\">
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "        </section><!-- end #content -->


        <footer id=\"footer\" class=\"clearfix\">
            <div class=\"container\">
                <div class=\"three-fourth\">
                    <nav id=\"footer-nav\" class=\"clearfix\">
                        <ul>
                            <li>
                                <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("portefolio_homepage");
        echo "\">Acceuil</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("portefolio_cv");
        echo "\">Curiculum vitae</a>
                            </li>

                            <li>
                                <a href='";
        // line 103
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 1));
        echo "'>1ere annee</a>
                            </li>

                            <li>
                                <a href='";
        // line 107
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 2));
        echo "'>2eme annee</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("portefolio_veille");
        echo "\">Veille techno</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("portefolio_contact");
        echo "\">Contact</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("admin_rpi_homepage");
        echo "\">administration RPI</a>
                            </li>
                        </ul>
                    </nav><!-- end #footer-nav -->

                    <ul class=\"contact-info\">
                        <li class=\"address\"><a href=\"https://maps.google.be/maps?q=google+map+paris+tour+eiffel&amp;oe=utf-8&amp;client=firefox-beta&amp;ie=UTF-8&amp;ei=z2KiUMvoBM3N0AWruoDYDw&amp;ved=0CAsQ_AUoAg\">15 Boulevard du pavatou - 15000 Aurillac</a></li>
                        <li class=\"phone\"><a href=\"tel:0678816178\">Tél : 06 78 81 61 78</a></li>
                        <li class=\"email\"><a href=\"mailto:bancarel.valentin@gmail.com\">bancarel.valentin@gmail.com</a></li>
                    </ul><!-- end .contact-info -->

                </div><!-- end .three-fourth -->
            </div><!-- end .container -->
        </footer><!-- end #footer -->

        <footer id=\"footer-bottom\" class=\"clearfix\">
            <div class=\"container\">
                <ul>
                    <li>SmartStart &copy; 2012</li>
                    <li><a href=\"#\">Legal Notice</a></li>
                    <li><a href=\"#\">Terms</a></li>
                </ul>
            </div><!-- end .container -->
        </footer><!-- end #footer-bottom -->
        
        
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"js/jquery-1.7.1.min.js\"><\\/script>')</script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/respond.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.easing-1.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.smartStartSlider.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.cycle.all.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//maps.google.com/maps/api/js?sensor=false\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.gmap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/custom.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 158
        $this->displayBlock('script', $context, $blocks);
        // line 159
        echo "    </body>
</html>
";
    }

    // line 11
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
    }

    // line 158
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 158,  341 => 85,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  298 => 151,  294 => 150,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  230 => 107,  223 => 103,  216 => 99,  209 => 95,  198 => 86,  196 => 85,  188 => 79,  180 => 74,  174 => 71,  168 => 68,  165 => 67,  163 => 66,  157 => 63,  151 => 62,  145 => 59,  139 => 58,  131 => 53,  124 => 49,  117 => 45,  108 => 41,  102 => 38,  96 => 37,  90 => 34,  84 => 33,  77 => 29,  73 => 28,  66 => 24,  61 => 22,  57 => 21,  52 => 19,  45 => 15,  40 => 13,  37 => 12,  35 => 11,  23 => 1,);
    }
}
