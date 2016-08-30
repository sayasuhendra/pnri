<?php

/* D:\xampp\htdocs\web\perpus\octo/themes/pnri/layouts/master.htm */
class __TwigTemplate_a828ad7bf19cfc923027503e6b0abc6dbad801c13a64f3d9444a257740bcbdf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "description", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"language\" content=\"\">
        <meta name=\"type\" content=\"\">
        <meta name=\"copyright\" content=\"\">
        <meta name=\"resource-type\" content=\"\">\t
        <meta name=\"distribution\" content=\"\">
        <meta name=\"email\" content=\"\">
        <meta name=\"rating\" content=\"General\">
        <meta name=\"robots\" content=\"INDEX,FOLLOW\">
        <meta name=\"revisit-after\" content=\"7 Days\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
        <meta http-equiv=\"content-language\" content=\"en\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pnri.png");
        echo "\"/>
        
\t\t<!-- CSS -->
        <link href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/semantic/semantic.css", 1 => "assets/css/core.css", 2 => "assets/css/main.css"));
        // line 30
        echo "\" rel=\"stylesheet\">

        <style type=\"text/css\">
          .ui.secondary.pointing.menu {
              border-bottom: none;
          }
          .ui.secondary.pointing.menu a.item:hover {
                border-bottom-color: grey;
                border-bottom-style: solid;
          }
          .kanan {
            text-align: right;
            }
        </style>
        
        ";
        // line 45
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 46
        echo "
          <style type=\"text/css\">

          body {
            background-color: #FFFFFF;
          }
          .main.container {
            margin-top: 2em;
          }

          .main.menu {
            margin-top: 4em;
            border-radius: 0;
            border-top: 1px solid rgba(34, 36, 38, 0.15);
            border-bottom: 1px solid rgba(34, 36, 38, 0.15);
            box-shadow: none;
            transition:
              box-shadow 0.5s ease,
              padding 0.5s ease
            ;
          }
          .main.menu .item img.logo {
            margin-right: 1.5em;
          }

          .overlay {
            float: left;
            margin: 0em 3em 1em 0em;
          }
          .overlay .menu {
            position: relative;
            left: 0;
            transition: left 0.5s ease;
          }

          .main.menu.fixed {
            background-color: #FFFFFF;
            border: 1px solid #DDD;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
          }
          .overlay.fixed .menu {
            left: 800px;
          }

          .text.container .left.floated.image {
            margin: 2em 2em 2em -4em;
          }
          .text.container .right.floated.image {
            margin: 2em -4em 2em 2em;
          }

          .ui.footer.segment {
            margin: 5em 0em 0em;
            padding: 5em 0em;
          }
          </style>

                  <!-- SCRIPTS -->
        <script src=\"";
        // line 104
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/bower_components/jquery/dist/jquery.js", 1 => "assets/vendor/semantic/semantic.js", 2 => "assets/js/core.js", 3 => "assets/js/app.js"));
        // line 109
        echo "\"></script>
          <script>
          \$(document)
            .ready(function() {

              // fix main menu to page on passing
              \$('.main.menu').visibility({
                type: 'fixed'
              });
              \$('.overlay').visibility({
                type: 'fixed',
                offset: 80
              });

              // lazy load images
              \$('.image').visibility({
                type: 'image',
                transition: 'vertical flip in',
                duration: 500
              });

              // show dropdown on hover
              \$('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
              });
            })
          ;
          </script>

        </head>
        <body>

          <div class=\"ui main text container\">
              <div class=\"center aligned ui grid\">
                <img class=\"ui image\" src=\"";
        // line 143
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logopng.png");
        echo "\" alt=\"Logo PNRI\">
                <h1 class=\"ui header\">PUSAT PRESERVASI BAHAN PUSTAKA</h1>
              </div>
          </div>



          <div class=\"ui main menu\">
            <div class=\"ui text container\">
            <a class=\"item\" href=\"/\">
                <img class=\"logo\" src=\"";
        // line 153
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pnri.png");
        echo "\">
              HOME</a>
              <a class=\"item\" href=\"/profil\">PROFIL</a>
              <a class=\"item\" href=\"/berita\">BERITA</a>
              <a class=\"item\" href=\"/pelayanan\">PELAYANAN PUBLIK</a>
              <a class=\"item\" href=\"/ebook\">EBOOK</a>
              <a class=\"item\" href=\"/kontak\">KONTAK</a>
                </div>
              </a>
            </div>
          </div>

          <div class=\"ui text container\">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <div class=\"overlay\">
              <div class=\"ui labeled icon vertical menu\">
                <a class=\"item\"><i class=\"twitter icon\"></i> Tweet</a>
                <a class=\"item\"><i class=\"facebook icon\"></i> Share</a>
                <a class=\"item\"><i class=\"mail icon\"></i> E-mail</a>
              </div>
            </div>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <img class=\"ui medium left floated image\" data-src=\"assets/images/wireframe/square-image.png\">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
            <img class=\"ui medium right floated image\" data-src=\"assets/images/wireframe/square-image.png\">
            Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <img class=\"ui medium left floated image\" data-src=\"assets/images/wireframe/square-image.png\">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
            <img class=\"ui medium right floated image\" data-src=\"assets/images/wireframe/square-image.png\">
            Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
          </div>

          <div class=\"ui inverted vertical footer segment\">
            <div class=\"ui center aligned container\">
              <div class=\"ui stackable inverted divided grid\">
                <div class=\"three wide column\">
                  <h4 class=\"ui inverted header\">Group 1</h4>
                  <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">Link One</a>
                    <a href=\"#\" class=\"item\">Link Two</a>
                    <a href=\"#\" class=\"item\">Link Three</a>
                    <a href=\"#\" class=\"item\">Link Four</a>
                  </div>
                </div>
                <div class=\"three wide column\">
                  <h4 class=\"ui inverted header\">Group 2</h4>
                  <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">Link One</a>
                    <a href=\"#\" class=\"item\">Link Two</a>
                    <a href=\"#\" class=\"item\">Link Three</a>
                    <a href=\"#\" class=\"item\">Link Four</a>
                  </div>
                </div>
                <div class=\"three wide column\">
                  <h4 class=\"ui inverted header\">Group 3</h4>
                  <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">Link One</a>
                    <a href=\"#\" class=\"item\">Link Two</a>
                    <a href=\"#\" class=\"item\">Link Three</a>
                    <a href=\"#\" class=\"item\">Link Four</a>
                  </div>
                </div>
                <div class=\"seven wide column\">
                  <h4 class=\"ui inverted header\">Footer Header</h4>
                  <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                </div>
              </div>
              <div class=\"ui inverted section divider\"></div>
              <img src=\"";
        // line 231
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pnri.png");
        echo "\" class=\"ui centered mini image\">
              <div class=\"ui horizontal inverted small divided link list\">
                <a class=\"item\" href=\"#\">Site Map</a>
                <a class=\"item\" href=\"#\">Contact Us</a>
                <a class=\"item\" href=\"#\">Terms and Conditions</a>
                <a class=\"item\" href=\"#\">Privacy Policy</a>
              </div>
            </div>
          </div>
        <!-- CONTENT -->
        <div class=\"ui container\">
            ";
        // line 242
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 243
        echo "
            ";
        // line 244
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer-menu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 245
        echo "        </div>

        ";
        // line 247
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 248
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 249
        echo "\t\t
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\web\\perpus\\octo/themes/pnri/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 249,  306 => 248,  299 => 247,  295 => 245,  291 => 244,  288 => 243,  286 => 242,  272 => 231,  191 => 153,  178 => 143,  142 => 109,  140 => 104,  80 => 46,  77 => 45,  60 => 30,  58 => 26,  52 => 23,  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>{{ this.page.title }}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="description" content="{{ this.page.description }}">*/
/*         <meta name="author" content="">*/
/*         <meta name="keywords" content="">*/
/*         <meta name="language" content="">*/
/*         <meta name="type" content="">*/
/*         <meta name="copyright" content="">*/
/*         <meta name="resource-type" content="">	*/
/*         <meta name="distribution" content="">*/
/*         <meta name="email" content="">*/
/*         <meta name="rating" content="General">*/
/*         <meta name="robots" content="INDEX,FOLLOW">*/
/*         <meta name="revisit-after" content="7 Days">*/
/*         <meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*         <meta http-equiv="content-language" content="en">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <link rel="icon" type="image/x-icon" href="{{ 'assets/images/pnri.png'|theme }}"/>*/
/*         */
/* 		<!-- CSS -->*/
/*         <link href="{{ [*/
/*             'assets/vendor/semantic/semantic.css',*/
/*             'assets/css/core.css',*/
/*             'assets/css/main.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/* */
/*         <style type="text/css">*/
/*           .ui.secondary.pointing.menu {*/
/*               border-bottom: none;*/
/*           }*/
/*           .ui.secondary.pointing.menu a.item:hover {*/
/*                 border-bottom-color: grey;*/
/*                 border-bottom-style: solid;*/
/*           }*/
/*           .kanan {*/
/*             text-align: right;*/
/*             }*/
/*         </style>*/
/*         */
/*         {% styles %}*/
/* */
/*           <style type="text/css">*/
/* */
/*           body {*/
/*             background-color: #FFFFFF;*/
/*           }*/
/*           .main.container {*/
/*             margin-top: 2em;*/
/*           }*/
/* */
/*           .main.menu {*/
/*             margin-top: 4em;*/
/*             border-radius: 0;*/
/*             border-top: 1px solid rgba(34, 36, 38, 0.15);*/
/*             border-bottom: 1px solid rgba(34, 36, 38, 0.15);*/
/*             box-shadow: none;*/
/*             transition:*/
/*               box-shadow 0.5s ease,*/
/*               padding 0.5s ease*/
/*             ;*/
/*           }*/
/*           .main.menu .item img.logo {*/
/*             margin-right: 1.5em;*/
/*           }*/
/* */
/*           .overlay {*/
/*             float: left;*/
/*             margin: 0em 3em 1em 0em;*/
/*           }*/
/*           .overlay .menu {*/
/*             position: relative;*/
/*             left: 0;*/
/*             transition: left 0.5s ease;*/
/*           }*/
/* */
/*           .main.menu.fixed {*/
/*             background-color: #FFFFFF;*/
/*             border: 1px solid #DDD;*/
/*             box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);*/
/*           }*/
/*           .overlay.fixed .menu {*/
/*             left: 800px;*/
/*           }*/
/* */
/*           .text.container .left.floated.image {*/
/*             margin: 2em 2em 2em -4em;*/
/*           }*/
/*           .text.container .right.floated.image {*/
/*             margin: 2em -4em 2em 2em;*/
/*           }*/
/* */
/*           .ui.footer.segment {*/
/*             margin: 5em 0em 0em;*/
/*             padding: 5em 0em;*/
/*           }*/
/*           </style>*/
/* */
/*                   <!-- SCRIPTS -->*/
/*         <script src="{{ [*/
/*             'assets/vendor/bower_components/jquery/dist/jquery.js',*/
/*             'assets/vendor/semantic/semantic.js',*/
/*             'assets/js/core.js',*/
/*             'assets/js/app.js'*/
/*         ]|theme }}"></script>*/
/*           <script>*/
/*           $(document)*/
/*             .ready(function() {*/
/* */
/*               // fix main menu to page on passing*/
/*               $('.main.menu').visibility({*/
/*                 type: 'fixed'*/
/*               });*/
/*               $('.overlay').visibility({*/
/*                 type: 'fixed',*/
/*                 offset: 80*/
/*               });*/
/* */
/*               // lazy load images*/
/*               $('.image').visibility({*/
/*                 type: 'image',*/
/*                 transition: 'vertical flip in',*/
/*                 duration: 500*/
/*               });*/
/* */
/*               // show dropdown on hover*/
/*               $('.main.menu  .ui.dropdown').dropdown({*/
/*                 on: 'hover'*/
/*               });*/
/*             })*/
/*           ;*/
/*           </script>*/
/* */
/*         </head>*/
/*         <body>*/
/* */
/*           <div class="ui main text container">*/
/*               <div class="center aligned ui grid">*/
/*                 <img class="ui image" src="{{ 'assets/images/logopng.png'|theme }}" alt="Logo PNRI">*/
/*                 <h1 class="ui header">PUSAT PRESERVASI BAHAN PUSTAKA</h1>*/
/*               </div>*/
/*           </div>*/
/* */
/* */
/* */
/*           <div class="ui main menu">*/
/*             <div class="ui text container">*/
/*             <a class="item" href="/">*/
/*                 <img class="logo" src="{{ 'assets/images/pnri.png'|theme }}">*/
/*               HOME</a>*/
/*               <a class="item" href="/profil">PROFIL</a>*/
/*               <a class="item" href="/berita">BERITA</a>*/
/*               <a class="item" href="/pelayanan">PELAYANAN PUBLIK</a>*/
/*               <a class="item" href="/ebook">EBOOK</a>*/
/*               <a class="item" href="/kontak">KONTAK</a>*/
/*                 </div>*/
/*               </a>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="ui text container">*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <div class="overlay">*/
/*               <div class="ui labeled icon vertical menu">*/
/*                 <a class="item"><i class="twitter icon"></i> Tweet</a>*/
/*                 <a class="item"><i class="facebook icon"></i> Share</a>*/
/*                 <a class="item"><i class="mail icon"></i> E-mail</a>*/
/*               </div>*/
/*             </div>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <img class="ui medium left floated image" data-src="assets/images/wireframe/square-image.png">*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.*/
/*             <img class="ui medium right floated image" data-src="assets/images/wireframe/square-image.png">*/
/*             Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <img class="ui medium left floated image" data-src="assets/images/wireframe/square-image.png">*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.*/
/*             <img class="ui medium right floated image" data-src="assets/images/wireframe/square-image.png">*/
/*             Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>*/
/*           </div>*/
/* */
/*           <div class="ui inverted vertical footer segment">*/
/*             <div class="ui center aligned container">*/
/*               <div class="ui stackable inverted divided grid">*/
/*                 <div class="three wide column">*/
/*                   <h4 class="ui inverted header">Group 1</h4>*/
/*                   <div class="ui inverted link list">*/
/*                     <a href="#" class="item">Link One</a>*/
/*                     <a href="#" class="item">Link Two</a>*/
/*                     <a href="#" class="item">Link Three</a>*/
/*                     <a href="#" class="item">Link Four</a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="three wide column">*/
/*                   <h4 class="ui inverted header">Group 2</h4>*/
/*                   <div class="ui inverted link list">*/
/*                     <a href="#" class="item">Link One</a>*/
/*                     <a href="#" class="item">Link Two</a>*/
/*                     <a href="#" class="item">Link Three</a>*/
/*                     <a href="#" class="item">Link Four</a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="three wide column">*/
/*                   <h4 class="ui inverted header">Group 3</h4>*/
/*                   <div class="ui inverted link list">*/
/*                     <a href="#" class="item">Link One</a>*/
/*                     <a href="#" class="item">Link Two</a>*/
/*                     <a href="#" class="item">Link Three</a>*/
/*                     <a href="#" class="item">Link Four</a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="seven wide column">*/
/*                   <h4 class="ui inverted header">Footer Header</h4>*/
/*                   <p>Extra space for a call to action inside the footer that could help re-engage users.</p>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="ui inverted section divider"></div>*/
/*               <img src="{{ 'assets/images/pnri.png'|theme }}" class="ui centered mini image">*/
/*               <div class="ui horizontal inverted small divided link list">*/
/*                 <a class="item" href="#">Site Map</a>*/
/*                 <a class="item" href="#">Contact Us</a>*/
/*                 <a class="item" href="#">Terms and Conditions</a>*/
/*                 <a class="item" href="#">Privacy Policy</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         <!-- CONTENT -->*/
/*         <div class="ui container">*/
/*             {% page %}*/
/* */
/*             {% partial 'footer-menu' %}*/
/*         </div>*/
/* */
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* 		*/
/*     </body>*/
/* </html>*/
