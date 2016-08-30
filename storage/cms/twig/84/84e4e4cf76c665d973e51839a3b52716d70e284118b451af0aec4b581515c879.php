<?php

/* D:\xampp\htdocs\web\perpus\octo/themes/pnri/pages/kontak.htm */
class __TwigTemplate_5c811c6c1348f675c326474a70fc2317d6b42adfa99a2827a689c83615023784 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 2
        echo "           <style>
        #map {
               width: 100%;
               height: 400px;
            }
           </style>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 9
        echo "
<h4 class=\"ui horizontal divider header\">
  <i class=\"mail outline icon\"></i>
  Kontak Kami
</h4>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
            <form class=\"ui form\">
                    <div class=\"field\">
            \t        <label>Nama Lengkap</label>
                        <input type=\"text\" name=\"nama\" placeholder=\"Nama Lengkap\">
                    </div>
                    <div class=\"field\">
            \t        <label>Nomer Telepon</label>
                        <input type=\"text\" name=\"telepon\" placeholder=\"Nomer Telepon\">
                    </div>
                    <div class=\"field\">
                        <label>Alamat Email</label>
                        <input type=\"text\" name=\"email\" placeholder=\"Alamat Email\">
                    </div>
                    <div class=\"field\">
            \t        <label>Pesan</label>
                        <textarea rows=\"7\"></textarea>
                    </div>
                <div class=\"ui primary button right floated\" type=\"submit\">Kirim Pesan</div>
            </form>
        </div>
        <div class=\"column\">
              <div class=\"ui stackable three column grid center aligned\">
                <div class=\"column\">
                  <a href=\"https://www.facebook.com/ayokeperpusnas\"><i class=\"icon facebook\"></i> Facebook <br></a>
                </div>
                <div class=\"column\">
                  <a href=\"https://twitter.com/perpusnas1\"><i class=\"icon twitter\"></i> Twitter <br></a>
                </div>
                <div class=\"column\">
                  <a href=\"http://www.youtube.com/user/Katinksg/videos\"><i class=\"icon youtube\"></i> Youtube <br></a>
                </div>
                <div class=\"ui horizontal divider\">
                    <i class=\"map outline icon\"></i>
                    Peta Lokasi
                </div>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.081446310664!2d106.847124!3d-6.194861!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf312057e2b0bab8!2sPerpustakaan+Nasional+Republik+Indonesia+(PNRI)!5e0!3m2!1sid!2sus!4v1472373892047\" width=\"100%\" height=\"360\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            </div>
        </div>



";
        // line 58
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 59
        echo "<!-- Map Scripts-->
<!-- <script src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> -->
<!-- Google Map -->
<!-- <script type=\"text/javascript\">
    (function(\$) {
      \"use strict\";
        var locations = [
        ['<div class=\"infobox\"><h3 class=\"title\">RSUPN Dr. Cipto Mangunkusumo</h3><span>Jl. Diponegoro No.71 Jakarta Pusat</span><br>Contact Center 1500135<br>Emergency 0812 8381 9324</p></div></div></div>', -6.196799,106.8468819,17]
        ];
    
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
            scrollwheel: false,
            navigationControl: true,
            mapTypeControl: true,
            scaleControl: true,
            draggable: true,
            // styles: [ { \"stylers\": [ { \"hue\": \"#000\" },  {saturation: -200},
            //     {gamma: 0.50} ] } ],
            center: new google.maps.LatLng(-6.196799,106.8468819,17),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    
        var infowindow = new google.maps.InfoWindow();
    
        var marker, i;
    
        for (i = 0; i < locations.length; i++) {  
      
            marker = new google.maps.Marker({ 
            position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
            map: map,
            icon: 'images/logo.png'
            });
    
    
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
    })(jQuery);
</script> -->
";
        // line 58
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\web\\perpus\\octo/themes/pnri/pages/kontak.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 58,  84 => 59,  82 => 58,  31 => 9,  29 => 1,  21 => 2,  19 => 1,);
    }
}
/* {% put styles %}*/
/*            <style>*/
/*         #map {*/
/*                width: 100%;*/
/*                height: 400px;*/
/*             }*/
/*            </style>*/
/* {% endput %}*/
/* */
/* <h4 class="ui horizontal divider header">*/
/*   <i class="mail outline icon"></i>*/
/*   Kontak Kami*/
/* </h4>*/
/* <div class="ui two column stackable grid">*/
/*     <div class="column">*/
/*             <form class="ui form">*/
/*                     <div class="field">*/
/*             	        <label>Nama Lengkap</label>*/
/*                         <input type="text" name="nama" placeholder="Nama Lengkap">*/
/*                     </div>*/
/*                     <div class="field">*/
/*             	        <label>Nomer Telepon</label>*/
/*                         <input type="text" name="telepon" placeholder="Nomer Telepon">*/
/*                     </div>*/
/*                     <div class="field">*/
/*                         <label>Alamat Email</label>*/
/*                         <input type="text" name="email" placeholder="Alamat Email">*/
/*                     </div>*/
/*                     <div class="field">*/
/*             	        <label>Pesan</label>*/
/*                         <textarea rows="7"></textarea>*/
/*                     </div>*/
/*                 <div class="ui primary button right floated" type="submit">Kirim Pesan</div>*/
/*             </form>*/
/*         </div>*/
/*         <div class="column">*/
/*               <div class="ui stackable three column grid center aligned">*/
/*                 <div class="column">*/
/*                   <a href="https://www.facebook.com/ayokeperpusnas"><i class="icon facebook"></i> Facebook <br></a>*/
/*                 </div>*/
/*                 <div class="column">*/
/*                   <a href="https://twitter.com/perpusnas1"><i class="icon twitter"></i> Twitter <br></a>*/
/*                 </div>*/
/*                 <div class="column">*/
/*                   <a href="http://www.youtube.com/user/Katinksg/videos"><i class="icon youtube"></i> Youtube <br></a>*/
/*                 </div>*/
/*                 <div class="ui horizontal divider">*/
/*                     <i class="map outline icon"></i>*/
/*                     Peta Lokasi*/
/*                 </div>*/
/*                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.081446310664!2d106.847124!3d-6.194861!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf312057e2b0bab8!2sPerpustakaan+Nasional+Republik+Indonesia+(PNRI)!5e0!3m2!1sid!2sus!4v1472373892047" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/* {% put scripts %}*/
/* <!-- Map Scripts-->*/
/* <!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->*/
/* <!-- Google Map -->*/
/* <!-- <script type="text/javascript">*/
/*     (function($) {*/
/*       "use strict";*/
/*         var locations = [*/
/*         ['<div class="infobox"><h3 class="title">RSUPN Dr. Cipto Mangunkusumo</h3><span>Jl. Diponegoro No.71 Jakarta Pusat</span><br>Contact Center 1500135<br>Emergency 0812 8381 9324</p></div></div></div>', -6.196799,106.8468819,17]*/
/*         ];*/
/*     */
/*         var map = new google.maps.Map(document.getElementById('map'), {*/
/*           zoom: 15,*/
/*             scrollwheel: false,*/
/*             navigationControl: true,*/
/*             mapTypeControl: true,*/
/*             scaleControl: true,*/
/*             draggable: true,*/
/*             // styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -200},*/
/*             //     {gamma: 0.50} ] } ],*/
/*             center: new google.maps.LatLng(-6.196799,106.8468819,17),*/
/*           mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*         });*/
/*     */
/*         var infowindow = new google.maps.InfoWindow();*/
/*     */
/*         var marker, i;*/
/*     */
/*         for (i = 0; i < locations.length; i++) {  */
/*       */
/*             marker = new google.maps.Marker({ */
/*             position: new google.maps.LatLng(locations[i][1], locations[i][2]), */
/*             map: map,*/
/*             icon: 'images/logo.png'*/
/*             });*/
/*     */
/*     */
/*           google.maps.event.addListener(marker, 'click', (function(marker, i) {*/
/*             return function() {*/
/*               infowindow.setContent(locations[i][0]);*/
/*               infowindow.open(map, marker);*/
/*             }*/
/*           })(marker, i));*/
/*         }*/
/*     })(jQuery);*/
/* </script> -->*/
/* {% endput %}*/
