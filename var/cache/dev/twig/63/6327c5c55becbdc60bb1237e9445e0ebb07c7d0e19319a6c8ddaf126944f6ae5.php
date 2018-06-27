<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86fb0449ccea260dc7b314050351af50046f8912d023ce5f7c4bcf888d3aaad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fb0449ccea260dc7b314050351af50046f8912d023ce5f7c4bcf888d3aaad9->enter($__internal_86fb0449ccea260dc7b314050351af50046f8912d023ce5f7c4bcf888d3aaad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_86fb0449ccea260dc7b314050351af50046f8912d023ce5f7c4bcf888d3aaad9->leave($__internal_86fb0449ccea260dc7b314050351af50046f8912d023ce5f7c4bcf888d3aaad9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e517e6394e96be64657559e49fc4324745b61c412880137e5d737b74de26b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e517e6394e96be64657559e49fc4324745b61c412880137e5d737b74de26b18->enter($__internal_4e517e6394e96be64657559e49fc4324745b61c412880137e5d737b74de26b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4e517e6394e96be64657559e49fc4324745b61c412880137e5d737b74de26b18->leave($__internal_4e517e6394e96be64657559e49fc4324745b61c412880137e5d737b74de26b18_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
