<?php

/* D:\xampp\htdocs\web\perpus\octo/themes/pnri/partials/menu.htm */
class __TwigTemplate_16657cdd2a0c2c7d024bab70a829b98aadae6b3c49873722ba486d9bab3f3d61 extends Twig_Template
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
        echo "<div class=\"ui main text container\">
    <div class=\"center aligned ui grid\">
      <img class=\"ui image\" src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logopng.png");
        echo "\" alt=\"Logo PNRI\">
      <h1 class=\"ui header\">PUSAT PRESERVASI BAHAN PUSTAKA</h1>
    </div>
</div>



<div class=\"ui stackable main menu\">
  <div class=\"ui text container\">
    <a class=\"item ";
        // line 12
        echo ((($this->getAttribute((isset($context["viewBag"]) ? $context["viewBag"] : null), "activeMenu", array()) == "home")) ? ("active") : (""));
        echo "\" href=\"/\"><img class=\"logo\" src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pnri.png");
        echo "\">HOME</a>
    <a class=\"item ";
        // line 13
        echo ((($this->getAttribute((isset($context["viewBag"]) ? $context["viewBag"] : null), "activeMenu", array()) == "profil")) ? ("active") : (""));
        echo "\" href=\"/profil\">PROFIL</a>
    <a class=\"item ";
        // line 14
        echo ((($this->getAttribute((isset($context["viewBag"]) ? $context["viewBag"] : null), "activeMenu", array()) == "berita")) ? ("active") : (""));
        echo "\" href=\"/berita\">BERITA</a>
    <a class=\"item ";
        // line 15
        echo ((($this->getAttribute((isset($context["viewBag"]) ? $context["viewBag"] : null), "activeMenu", array()) == "pelayanan")) ? ("active") : (""));
        echo "\" href=\"/pelayanan\">PELAYANAN PUBLIK</a>
    <a class=\"item ";
        // line 16
        echo ((($this->getAttribute((isset($context["viewBag"]) ? $context["viewBag"] : null), "activeMenu", array()) == "ebook")) ? ("active") : (""));
        echo "\" href=\"/ebook\">EBOOK</a>
    <a class=\"item ";
        // line 17
        echo ((($this->getAttribute((isset($context["viewBag"]) ? $context["viewBag"] : null), "activeMenu", array()) == "kontak")) ? ("active") : (""));
        echo "\" href=\"/kontak\">KONTAK</a>
      </div>
    </a>
  </div>
</div>

<div class=\"ui hidden divider\"></div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\web\\perpus\\octo/themes/pnri/partials/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  35 => 12,  23 => 3,  19 => 1,);
    }
}
/* <div class="ui main text container">*/
/*     <div class="center aligned ui grid">*/
/*       <img class="ui image" src="{{ 'assets/images/logopng.png'|theme }}" alt="Logo PNRI">*/
/*       <h1 class="ui header">PUSAT PRESERVASI BAHAN PUSTAKA</h1>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* <div class="ui stackable main menu">*/
/*   <div class="ui text container">*/
/*     <a class="item {{ viewBag.activeMenu == 'home' ? 'active' }}" href="/"><img class="logo" src="{{ 'assets/images/pnri.png'|theme }}">HOME</a>*/
/*     <a class="item {{ viewBag.activeMenu == 'profil' ? 'active' }}" href="/profil">PROFIL</a>*/
/*     <a class="item {{ viewBag.activeMenu == 'berita' ? 'active' }}" href="/berita">BERITA</a>*/
/*     <a class="item {{ viewBag.activeMenu == 'pelayanan' ? 'active' }}" href="/pelayanan">PELAYANAN PUBLIK</a>*/
/*     <a class="item {{ viewBag.activeMenu == 'ebook' ? 'active' }}" href="/ebook">EBOOK</a>*/
/*     <a class="item {{ viewBag.activeMenu == 'kontak' ? 'active' }}" href="/kontak">KONTAK</a>*/
/*       </div>*/
/*     </a>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="ui hidden divider"></div>*/
