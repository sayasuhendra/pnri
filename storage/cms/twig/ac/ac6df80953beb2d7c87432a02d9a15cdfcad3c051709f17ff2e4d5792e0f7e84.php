<?php

/* D:\xampp\htdocs\web\perpus\octo/themes/pnri/pages/home-white.htm */
class __TwigTemplate_55017d5c6c712cac87c4d03c315cff65aba10ec3f8da1de1edf1530eac9a741f extends Twig_Template
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
";
        // line 4
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/slides/responsiveslides.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/slides/demo/demo.css");
        echo "\">
";
        // line 4
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 8
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui centered grid\">
    <div class=\"callbacks_container\">
        <ul class=\"rslides\" id=\"slider\">
            <li> <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-1.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-2.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-3.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-4.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-5.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-6.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-7.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-8.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-9.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-10.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-11.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-12.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-13.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-14.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-15.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-16.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-17.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-18.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-19.bmp");
        echo "\" alt=\"\"> </li>
            <li> <img src=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slide/preservasi-pnri-20.bmp");
        echo "\" alt=\"\"> </li>
        </ul>
    </div>
</div>

<div class=\"ui horizontal section divider\"><i class=\"newspaper icon\"> </i> Berita Terbaru</div>
<div class=\"ui hidden divider\"></div>
<div class=\"ui three column stackable grid\">
    <div class=\"seven wide column\">
        <div class=\"ui divided items\">
          <div class=\"item\">
            <div class=\"image\">
              <img src=\"";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/berita/pnri-pelestarian-naskah-cirebon.jpg");
        echo "\">
            </div>
            <div class=\"content\">
              <a class=\"header\" href=\"/pelestarian-naskah-keraton-kasepuhan-cirebon\">Pelestarian Naskah Keraton Kasepuhan Cirebon</a>
              <div class=\"meta\">
                <span class=\"cinema\">Cirebon, 29 Agustus 2016</span>
              </div>
              <div class=\"description\">
                <p>Dalam rangka upaya pelestarian naskah yang ada di seluruh Nusantara, Pusat Preservasi Bahan Pustaka telah mengirimkan tim pelestarian... </p>
              </div>
              <div class=\"extra\">
                <a class=\"ui mini primary button outline right labeled icon right floated\" href=\"/pelestarian-naskah-keraton-kasepuhan-cirebon\"><i class=\"angle right icon\"></i> Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"image\">
              <img src=\"";
        // line 60
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/berita/pnri-pelestarian-naskah-kuno-solo.jpg");
        echo "\">
            </div>
            <div class=\"content\">
              <a class=\"header\" href=\"/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa\">Naskah Kuno Masjid Agung Solo Rusak, Perpustakaan Nasional Kecewa</a>
              <div class=\"meta\">
                <span class=\"cinema\">Solo, 9 Agustus 2015</span>
              </div>
              <div class=\"description\">
                <p>Solopos.com, SOLO — Perpustakaan Nasional Republik Indenesia menerjunkan tim khusus yang bertugas melakukan menyelamatan naskah buku kuno koleksi Masjid Agung Solo.</p>
              </div>
              <div class=\"extra\">
                <a class=\"ui mini primary button outline right labeled icon right floated\" href=\"/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa\"><i class=\"angle right icon\"></i> Selengkapnya</a>
              </div>
            </div>
          </div>
         </div>
    </div>
    <div class=\"two wide column\">
        <div class=\"ui vertical divider\"><i class=\"book icon\"></i></div>
    </div>
    <div class=\"seven wide column\">
        <div class=\"ui divided items\">
          <div class=\"item\">
            <div class=\"image\">
              <img src=\"";
        // line 84
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/berita/pnri-pelestarian-naskah-cirebon.jpg");
        echo "\">
            </div>
            <div class=\"content\">
              <a class=\"header\" href=\"/pelestarian-naskah-keraton-kasepuhan-cirebon\">Pelestarian Naskah Keraton Kasepuhan Cirebon</a>
              <div class=\"meta\">
                <span class=\"cinema\">Cirebon, 29 Agustus 2016</span>
              </div>
              <div class=\"description\">
                <p>Dalam rangka upaya pelestarian naskah yang ada di seluruh Nusantara, Pusat Preservasi Bahan Pustaka telah mengirimkan tim pelestarian... </p>
              </div>
              <div class=\"extra\">
                <a class=\"ui mini primary button outline right labeled icon right floated\" href=\"/pelestarian-naskah-keraton-kasepuhan-cirebon\"><i class=\"angle right icon\"></i> Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"image\">
              <img src=\"";
        // line 101
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/berita/pnri-pelestarian-naskah-kuno-solo.jpg");
        echo "\">
            </div>
            <div class=\"content\">
              <a class=\"header\" href=\"/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa\">Naskah Kuno Masjid Agung Solo Rusak, Perpustakaan Nasional Kecewa</a>
              <div class=\"meta\">
                <span class=\"cinema\">Solo, 9 Agustus 2015</span>
              </div>
              <div class=\"description\">
                <p>Solopos.com, SOLO — Perpustakaan Nasional Republik Indenesia menerjunkan tim khusus yang bertugas melakukan menyelamatan naskah buku kuno koleksi Masjid Agung Solo.</p>
              </div>
              <div class=\"extra\">
                <a class=\"ui mini primary button outline right labeled icon right floated\" href=\"/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa\"><i class=\"angle right icon\"></i> Selengkapnya</a>
              </div>
            </div>
          </div>
         </div>
    </div>
</div>

";
        // line 120
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 121
        echo "<script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/slides/responsiveslides.min.js");
        echo "\"></script>
  <script type=\"text/javascript\">
  \$(\"#slider\").responsiveSlides({
    auto: true,
    nav: true,
    speed: 500,
    namespace: \"callbacks\",
    before: function () {
      \$('.events').append(\"<li>before event fired.</li>\");
    },
    after: function () {
      \$('.events').append(\"<li>after event fired.</li>\");
    }
  });
  </script>
";
        // line 120
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\web\\perpus\\octo/themes/pnri/pages/home-white.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 120,  230 => 121,  228 => 120,  206 => 101,  186 => 84,  159 => 60,  139 => 43,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  42 => 8,  40 => 4,  36 => 6,  31 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- HEADER -->*/
/* {% partial "header" %}*/
/* */
/* {% put styles %}*/
/*     <link rel="stylesheet" href="{{ 'assets/vendor/slides/responsiveslides.css'|theme }}">*/
/*     <link rel="stylesheet" href="{{ 'assets/vendor/slides/demo/demo.css'|theme }}">*/
/* {% endput %}*/
/* <div class="ui hidden divider"></div>*/
/* <div class="ui centered grid">*/
/*     <div class="callbacks_container">*/
/*         <ul class="rslides" id="slider">*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-1.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-2.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-3.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-4.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-5.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-6.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-7.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-8.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-9.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-10.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-11.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-12.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-13.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-14.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-15.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-16.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-17.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-18.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-19.bmp'|theme }}" alt=""> </li>*/
/*             <li> <img src="{{ 'assets/images/slide/preservasi-pnri-20.bmp'|theme }}" alt=""> </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="ui horizontal section divider"><i class="newspaper icon"> </i> Berita Terbaru</div>*/
/* <div class="ui hidden divider"></div>*/
/* <div class="ui three column stackable grid">*/
/*     <div class="seven wide column">*/
/*         <div class="ui divided items">*/
/*           <div class="item">*/
/*             <div class="image">*/
/*               <img src="{{  'assets/images/berita/pnri-pelestarian-naskah-cirebon.jpg'|theme }}">*/
/*             </div>*/
/*             <div class="content">*/
/*               <a class="header" href="/pelestarian-naskah-keraton-kasepuhan-cirebon">Pelestarian Naskah Keraton Kasepuhan Cirebon</a>*/
/*               <div class="meta">*/
/*                 <span class="cinema">Cirebon, 29 Agustus 2016</span>*/
/*               </div>*/
/*               <div class="description">*/
/*                 <p>Dalam rangka upaya pelestarian naskah yang ada di seluruh Nusantara, Pusat Preservasi Bahan Pustaka telah mengirimkan tim pelestarian... </p>*/
/*               </div>*/
/*               <div class="extra">*/
/*                 <a class="ui mini primary button outline right labeled icon right floated" href="/pelestarian-naskah-keraton-kasepuhan-cirebon"><i class="angle right icon"></i> Selengkapnya</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="item">*/
/*             <div class="image">*/
/*               <img src="{{  'assets/images/berita/pnri-pelestarian-naskah-kuno-solo.jpg'|theme }}">*/
/*             </div>*/
/*             <div class="content">*/
/*               <a class="header" href="/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa">Naskah Kuno Masjid Agung Solo Rusak, Perpustakaan Nasional Kecewa</a>*/
/*               <div class="meta">*/
/*                 <span class="cinema">Solo, 9 Agustus 2015</span>*/
/*               </div>*/
/*               <div class="description">*/
/*                 <p>Solopos.com, SOLO — Perpustakaan Nasional Republik Indenesia menerjunkan tim khusus yang bertugas melakukan menyelamatan naskah buku kuno koleksi Masjid Agung Solo.</p>*/
/*               </div>*/
/*               <div class="extra">*/
/*                 <a class="ui mini primary button outline right labeled icon right floated" href="/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa"><i class="angle right icon"></i> Selengkapnya</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*          </div>*/
/*     </div>*/
/*     <div class="two wide column">*/
/*         <div class="ui vertical divider"><i class="book icon"></i></div>*/
/*     </div>*/
/*     <div class="seven wide column">*/
/*         <div class="ui divided items">*/
/*           <div class="item">*/
/*             <div class="image">*/
/*               <img src="{{  'assets/images/berita/pnri-pelestarian-naskah-cirebon.jpg'|theme }}">*/
/*             </div>*/
/*             <div class="content">*/
/*               <a class="header" href="/pelestarian-naskah-keraton-kasepuhan-cirebon">Pelestarian Naskah Keraton Kasepuhan Cirebon</a>*/
/*               <div class="meta">*/
/*                 <span class="cinema">Cirebon, 29 Agustus 2016</span>*/
/*               </div>*/
/*               <div class="description">*/
/*                 <p>Dalam rangka upaya pelestarian naskah yang ada di seluruh Nusantara, Pusat Preservasi Bahan Pustaka telah mengirimkan tim pelestarian... </p>*/
/*               </div>*/
/*               <div class="extra">*/
/*                 <a class="ui mini primary button outline right labeled icon right floated" href="/pelestarian-naskah-keraton-kasepuhan-cirebon"><i class="angle right icon"></i> Selengkapnya</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="item">*/
/*             <div class="image">*/
/*               <img src="{{  'assets/images/berita/pnri-pelestarian-naskah-kuno-solo.jpg'|theme }}">*/
/*             </div>*/
/*             <div class="content">*/
/*               <a class="header" href="/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa">Naskah Kuno Masjid Agung Solo Rusak, Perpustakaan Nasional Kecewa</a>*/
/*               <div class="meta">*/
/*                 <span class="cinema">Solo, 9 Agustus 2015</span>*/
/*               </div>*/
/*               <div class="description">*/
/*                 <p>Solopos.com, SOLO — Perpustakaan Nasional Republik Indenesia menerjunkan tim khusus yang bertugas melakukan menyelamatan naskah buku kuno koleksi Masjid Agung Solo.</p>*/
/*               </div>*/
/*               <div class="extra">*/
/*                 <a class="ui mini primary button outline right labeled icon right floated" href="/naskah-kuno-masjid-agung-solo-rusak-perpustakaan-nasional-kecewa"><i class="angle right icon"></i> Selengkapnya</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*          </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% put scripts %}*/
/* <script src="{{ 'assets/vendor/slides/responsiveslides.min.js'|theme }}"></script>*/
/*   <script type="text/javascript">*/
/*   $("#slider").responsiveSlides({*/
/*     auto: true,*/
/*     nav: true,*/
/*     speed: 500,*/
/*     namespace: "callbacks",*/
/*     before: function () {*/
/*       $('.events').append("<li>before event fired.</li>");*/
/*     },*/
/*     after: function () {*/
/*       $('.events').append("<li>after event fired.</li>");*/
/*     }*/
/*   });*/
/*   </script>*/
/* {% endput %}*/
