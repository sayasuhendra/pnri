<?php

/* D:\xampp\htdocs\web\perpus\octo/themes/pnri/pages/layanan.htm */
class __TwigTemplate_da902693c79028062728826c014b4ea4d2659a54a188c2a51ced7917f5207c67 extends Twig_Template
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
        echo "<form id=\"form\" class=\"ui form\" data-request=\"onSend\" data-request-success=\"\" data-request-confirm=\"\">
    <h4 class=\"ui dividing header\">Data Pemohon</h4>
    <div class=\"two fields\">
        <div class=\"field\">
\t        <label>Nama Lengkap</label>
            <input type=\"text\" name=\"nama\" placeholder=\"Nama Lengkap\">
        </div>
        <div class=\"field\">
\t        <label>Nama Organisasi</label>
            <input type=\"text\" name=\"organisasi\" placeholder=\"Nama Organisasi\">
        </div>
    </div>
    <div class=\"two fields\">
        <div class=\"field\">
\t        <label>Nomer Telepon</label>
            <input type=\"text\" name=\"telepon\" placeholder=\"Nomer Telepon\">
        </div>
        <div class=\"field\">
\t        <label>Alamat Email</label>
            <input type=\"text\" name=\"email\" placeholder=\"Alamat Email\">
        </div>
    </div>
    <div class=\"field\">
        <label>Alamat</label>
        <div class=\"fields\">
            <div class=\"twelve wide field\">
                <input type=\"text\" name=\"alamat\" placeholder=\"Alamat\">
            </div>
            <div class=\"four wide field\">
                <input type=\"text\" name=\"pos\" placeholder=\"Kode Pos\">
            </div>
        </div>
    </div>
    <div class=\"two fields\">
        <div class=\"field\">
            <label>Kecamatan</label>
            <select class=\"ui fluid dropdown\">
\t            <option value=\"\">Pilih Kecamatan</option>
            </select>
        </div>
        <div class=\"field\">
            <label>Kota/Kabupaten</label>
            <select class=\"ui fluid dropdown\">
\t            <option value=\"\">Pilih Kota/Kabupaten</option>
            </select>
        </div>
    </div>

    <h4 class=\"ui horizontal divider header\">Pilih Layanan Publik</h4>
    <div class=\"grouped fields\">
        
    \t<div class=\"two fields\">
\t        <div class=\"field\">
\t          <div class=\"ui radio checkbox\">
\t            <input type=\"radio\" name=\"layanan\" checked=\"\" tabindex=\"0\" class=\"hidden\">
\t            <label>Permintaan Pelestarian Naskah di Daerah Anda</label>
\t          </div>
\t        </div>
\t        <div class=\"field\">
\t          <div class=\"ui radio checkbox\">
\t            <input type=\"radio\" name=\"layanan\" tabindex=\"0\" class=\"hidden\">
\t            <label>Kunjungan Mengenal Pusat Preservasi Perpusnas RI</label>
\t          </div>
\t        </div>
        </div>
    \t<div class=\"two fields\">
\t        <div class=\"field\">
\t          <div class=\"ui radio checkbox\">
\t            <input type=\"radio\" name=\"layanan\" tabindex=\"0\" class=\"hidden\">
\t            <label>Workshop Penanganan Menghadapi Bencana 2016</label>
\t          </div>
\t        </div>
\t        <div class=\"field\">
\t          <div class=\"ui radio checkbox\">
\t            <input type=\"radio\" name=\"layanan\" tabindex=\"0\" class=\"hidden\">
\t            <label>Workshop Pedoman Pelestarian Bahan Pustaka 2016</label>
\t          </div>
\t        </div>
      </div>
  </div>
    <br>
                <!-- <button type=\"submit\" class=\"btn btn btn-primary\">Calculate</button> -->
    <button class=\"ui primary button right floated\" type=\"submit\">Kirim Permohonan</button>
</form>



";
        // line 88
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 89
        echo "    <script> 
        \$('.ui.radio.checkbox').checkbox();
    </script>
";
        // line 88
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\web\\perpus\\octo/themes/pnri/pages/layanan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 88,  110 => 89,  108 => 88,  19 => 1,);
    }
}
/* <form id="form" class="ui form" data-request="onSend" data-request-success="" data-request-confirm="">*/
/*     <h4 class="ui dividing header">Data Pemohon</h4>*/
/*     <div class="two fields">*/
/*         <div class="field">*/
/* 	        <label>Nama Lengkap</label>*/
/*             <input type="text" name="nama" placeholder="Nama Lengkap">*/
/*         </div>*/
/*         <div class="field">*/
/* 	        <label>Nama Organisasi</label>*/
/*             <input type="text" name="organisasi" placeholder="Nama Organisasi">*/
/*         </div>*/
/*     </div>*/
/*     <div class="two fields">*/
/*         <div class="field">*/
/* 	        <label>Nomer Telepon</label>*/
/*             <input type="text" name="telepon" placeholder="Nomer Telepon">*/
/*         </div>*/
/*         <div class="field">*/
/* 	        <label>Alamat Email</label>*/
/*             <input type="text" name="email" placeholder="Alamat Email">*/
/*         </div>*/
/*     </div>*/
/*     <div class="field">*/
/*         <label>Alamat</label>*/
/*         <div class="fields">*/
/*             <div class="twelve wide field">*/
/*                 <input type="text" name="alamat" placeholder="Alamat">*/
/*             </div>*/
/*             <div class="four wide field">*/
/*                 <input type="text" name="pos" placeholder="Kode Pos">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="two fields">*/
/*         <div class="field">*/
/*             <label>Kecamatan</label>*/
/*             <select class="ui fluid dropdown">*/
/* 	            <option value="">Pilih Kecamatan</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="field">*/
/*             <label>Kota/Kabupaten</label>*/
/*             <select class="ui fluid dropdown">*/
/* 	            <option value="">Pilih Kota/Kabupaten</option>*/
/*             </select>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <h4 class="ui horizontal divider header">Pilih Layanan Publik</h4>*/
/*     <div class="grouped fields">*/
/*         */
/*     	<div class="two fields">*/
/* 	        <div class="field">*/
/* 	          <div class="ui radio checkbox">*/
/* 	            <input type="radio" name="layanan" checked="" tabindex="0" class="hidden">*/
/* 	            <label>Permintaan Pelestarian Naskah di Daerah Anda</label>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        <div class="field">*/
/* 	          <div class="ui radio checkbox">*/
/* 	            <input type="radio" name="layanan" tabindex="0" class="hidden">*/
/* 	            <label>Kunjungan Mengenal Pusat Preservasi Perpusnas RI</label>*/
/* 	          </div>*/
/* 	        </div>*/
/*         </div>*/
/*     	<div class="two fields">*/
/* 	        <div class="field">*/
/* 	          <div class="ui radio checkbox">*/
/* 	            <input type="radio" name="layanan" tabindex="0" class="hidden">*/
/* 	            <label>Workshop Penanganan Menghadapi Bencana 2016</label>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        <div class="field">*/
/* 	          <div class="ui radio checkbox">*/
/* 	            <input type="radio" name="layanan" tabindex="0" class="hidden">*/
/* 	            <label>Workshop Pedoman Pelestarian Bahan Pustaka 2016</label>*/
/* 	          </div>*/
/* 	        </div>*/
/*       </div>*/
/*   </div>*/
/*     <br>*/
/*                 <!-- <button type="submit" class="btn btn btn-primary">Calculate</button> -->*/
/*     <button class="ui primary button right floated" type="submit">Kirim Permohonan</button>*/
/* </form>*/
/* */
/* */
/* */
/* {% put scripts %}*/
/*     <script> */
/*         $('.ui.radio.checkbox').checkbox();*/
/*     </script>*/
/* {% endput %}*/
