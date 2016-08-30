<?php

/* D:\xampp\htdocs\web\perpus\octo/themes/pnri/pages/lab-menu.htm */
class __TwigTemplate_2eaa0d40e8d24bf5d6cc5e19f1e58bcde9732c0276927b47ddf99dc624319562 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\web\\perpus\\octo/themes/pnri/pages/lab-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <!-- HEADER -->*/
/* {% partial "header" %}*/
