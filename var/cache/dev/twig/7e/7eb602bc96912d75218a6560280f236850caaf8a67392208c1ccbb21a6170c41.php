<?php

/* WebServiceBundle:Default:index.html.twig */
class __TwigTemplate_ed9e7645ebce1d71f9d6e0268c87135ef65ac39ab589916abcac68862bc0f460 extends Twig_Template
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
        $__internal_24492c0e7e47d61fb7231786285dd92f1e9ee1a5534d103675eca0b899d4bb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24492c0e7e47d61fb7231786285dd92f1e9ee1a5534d103675eca0b899d4bb8b->enter($__internal_24492c0e7e47d61fb7231786285dd92f1e9ee1a5534d103675eca0b899d4bb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["trajets"] ?? $this->getContext($context, "trajets")));
        echo "
";
        
        $__internal_24492c0e7e47d61fb7231786285dd92f1e9ee1a5534d103675eca0b899d4bb8b->leave($__internal_24492c0e7e47d61fb7231786285dd92f1e9ee1a5534d103675eca0b899d4bb8b_prof);

    }

    public function getTemplateName()
    {
        return "WebServiceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
{{ dump(trajets) }}
", "WebServiceBundle:Default:index.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/src/WebServiceBundle/Resources/views/Default/index.html.twig");
    }
}
