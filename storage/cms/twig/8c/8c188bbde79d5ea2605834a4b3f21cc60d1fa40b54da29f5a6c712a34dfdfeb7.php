<?php

/* D:\xampp\htdocs\web\perpus\octo/themes/pnri/pages/profil.htm */
class __TwigTemplate_d68f28dd8d871fbaa8c559485fee05e3e685ffa03d74958656adec36be6ae342 extends Twig_Template
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
        echo "<!-- HEADER -->
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<div class=\"ui grid padded\"></div>
<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        <div class=\"ui embed\" data-source=\"youtube\" data-id=\"Tp6ERq0RjII\" data-placeholder=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/profil-video.png");
        echo "\">
        </div>
    </div>
    <div class=\"column\">
        <h4 class=\"header\">Profil Pusat Preservasi Bahan Pustaka Perpusnas RI</h4>
        <p>Pusat Preservasi Bahan Pustaka mempunyai tugas melaksanakan pelestarian informasi dan fisik bahan pustaka.</p>
        <ul>
            <li>Pelaksanaan pelestarian fisik melalui pemeliharaan, perawatan, restorasi dan penjilidan bahan pustaka</li>
            <li>Pelaksanaan pelestarian kandungan informasi bahan pustaka melalui alih media mikrografi. </li>
            <li>Pelaksanaan pelestarian kandungan informasi bahan pustaka melalui alih media digital ke media baru.</li>
        </ul>
        <h5>Kontak Kami</h5>
        <div class=\"ui stackable two column grid\">
            <div class=\"column\">
                Jalan Salemba Raya No. 28 A
                <br> DKI Jakarta 10430
                <br> Free Call 0800-1-737787
            </div>
            <div class=\"column\">
                <a href=\"https://www.facebook.com/ayokeperpusnas\"><i class=\"icon facebook\"></i> Facebook <br></a>
                <a href=\"https://twitter.com/perpusnas1\"><i class=\"icon twitter\"></i> Twitter <br></a>
                <a href=\"http://www.youtube.com/user/Katinksg/videos\"><i class=\"icon youtube\"></i> Youtube <br></a>
            </div>
        </div>
        <!-- <div class=\"ui horizontal divider\">Kontak</div> -->
        <!--             <div class=\"ui search\">
          <div class=\"ui transparent icon input\">
            <input class=\"prompt\" type=\"text\" placeholder=\"Cari Ebook...\">
            <i class=\"search icon\"></i>
          </div>
          <div class=\"results\"></div>
        </div> -->
    </div>
</div>
<div class=\"ui horizontal section divider\">Silahkan Pilih Pelayanan Publik Kami</div>
<div class=\"ui stackable center aligned grid\">
    <a href=\"/pelayanan\" class=\"violet four wide column\">Permintaan Pelestarian Naskah di Daerah Anda</a>
    <a href=\"/pelayanan\" class=\"blue four wide column\">Kunjungan Mengenal Pusat Preservasi Perpusnas RI</a>
    <a href=\"/pelayanan\" class=\"teal four wide column\">Workshop Penanganan Menghadapi Bencana 2016</a>
    <a href=\"/pelayanan\" class=\"green four wide column\">Workshop Pedoman Pelestarian Bahan Pustaka 2016</a>
</div>


";
        // line 50
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 51
        echo "  <script type=\"text/javascript\">
    \$('.ui.embed').embed();
  </script>
";
        // line 50
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\web\\perpus\\octo/themes/pnri/pages/profil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 50,  80 => 51,  78 => 50,  32 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- HEADER -->*/
/* {% partial "header" %}*/
/* */
/* <div class="ui grid padded"></div>*/
/* <div class="ui stackable two column grid">*/
/*     <div class="column">*/
/*         <div class="ui embed" data-source="youtube" data-id="Tp6ERq0RjII" data-placeholder="{{ 'assets/images/profil-video.png'|theme }}">*/
/*         </div>*/
/*     </div>*/
/*     <div class="column">*/
/*         <h4 class="header">Profil Pusat Preservasi Bahan Pustaka Perpusnas RI</h4>*/
/*         <p>Pusat Preservasi Bahan Pustaka mempunyai tugas melaksanakan pelestarian informasi dan fisik bahan pustaka.</p>*/
/*         <ul>*/
/*             <li>Pelaksanaan pelestarian fisik melalui pemeliharaan, perawatan, restorasi dan penjilidan bahan pustaka</li>*/
/*             <li>Pelaksanaan pelestarian kandungan informasi bahan pustaka melalui alih media mikrografi. </li>*/
/*             <li>Pelaksanaan pelestarian kandungan informasi bahan pustaka melalui alih media digital ke media baru.</li>*/
/*         </ul>*/
/*         <h5>Kontak Kami</h5>*/
/*         <div class="ui stackable two column grid">*/
/*             <div class="column">*/
/*                 Jalan Salemba Raya No. 28 A*/
/*                 <br> DKI Jakarta 10430*/
/*                 <br> Free Call 0800-1-737787*/
/*             </div>*/
/*             <div class="column">*/
/*                 <a href="https://www.facebook.com/ayokeperpusnas"><i class="icon facebook"></i> Facebook <br></a>*/
/*                 <a href="https://twitter.com/perpusnas1"><i class="icon twitter"></i> Twitter <br></a>*/
/*                 <a href="http://www.youtube.com/user/Katinksg/videos"><i class="icon youtube"></i> Youtube <br></a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- <div class="ui horizontal divider">Kontak</div> -->*/
/*         <!--             <div class="ui search">*/
/*           <div class="ui transparent icon input">*/
/*             <input class="prompt" type="text" placeholder="Cari Ebook...">*/
/*             <i class="search icon"></i>*/
/*           </div>*/
/*           <div class="results"></div>*/
/*         </div> -->*/
/*     </div>*/
/* </div>*/
/* <div class="ui horizontal section divider">Silahkan Pilih Pelayanan Publik Kami</div>*/
/* <div class="ui stackable center aligned grid">*/
/*     <a href="/pelayanan" class="violet four wide column">Permintaan Pelestarian Naskah di Daerah Anda</a>*/
/*     <a href="/pelayanan" class="blue four wide column">Kunjungan Mengenal Pusat Preservasi Perpusnas RI</a>*/
/*     <a href="/pelayanan" class="teal four wide column">Workshop Penanganan Menghadapi Bencana 2016</a>*/
/*     <a href="/pelayanan" class="green four wide column">Workshop Pedoman Pelestarian Bahan Pustaka 2016</a>*/
/* </div>*/
/* */
/* */
/* {% put scripts %}*/
/*   <script type="text/javascript">*/
/*     $('.ui.embed').embed();*/
/*   </script>*/
/* {% endput %}*/
