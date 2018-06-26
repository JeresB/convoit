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
        $__internal_f42191a6b35f7b1bcb895768f126b4597f3cf1a87bd75bb86c5797f8069a3bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42191a6b35f7b1bcb895768f126b4597f3cf1a87bd75bb86c5797f8069a3bdd->enter($__internal_f42191a6b35f7b1bcb895768f126b4597f3cf1a87bd75bb86c5797f8069a3bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f42191a6b35f7b1bcb895768f126b4597f3cf1a87bd75bb86c5797f8069a3bdd->leave($__internal_f42191a6b35f7b1bcb895768f126b4597f3cf1a87bd75bb86c5797f8069a3bdd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c3cfcd8678f9d43b1f8067638d7df4f912c7150b253dfebec99d77ba891eee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3cfcd8678f9d43b1f8067638d7df4f912c7150b253dfebec99d77ba891eee0->enter($__internal_4c3cfcd8678f9d43b1f8067638d7df4f912c7150b253dfebec99d77ba891eee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4c3cfcd8678f9d43b1f8067638d7df4f912c7150b253dfebec99d77ba891eee0->leave($__internal_4c3cfcd8678f9d43b1f8067638d7df4f912c7150b253dfebec99d77ba891eee0_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
