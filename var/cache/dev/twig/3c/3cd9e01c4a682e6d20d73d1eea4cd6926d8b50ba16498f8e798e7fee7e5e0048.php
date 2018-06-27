<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1bcd499f0c98709c6476c18dc9d2f43aa12470c450085a2e57993a5194d27a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bcd499f0c98709c6476c18dc9d2f43aa12470c450085a2e57993a5194d27a5->enter($__internal_e1bcd499f0c98709c6476c18dc9d2f43aa12470c450085a2e57993a5194d27a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1bcd499f0c98709c6476c18dc9d2f43aa12470c450085a2e57993a5194d27a5->leave($__internal_e1bcd499f0c98709c6476c18dc9d2f43aa12470c450085a2e57993a5194d27a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_359d7c52f6d349562bc8510eb334431f2bc25868f851fe8a1c15596c0a77f333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359d7c52f6d349562bc8510eb334431f2bc25868f851fe8a1c15596c0a77f333->enter($__internal_359d7c52f6d349562bc8510eb334431f2bc25868f851fe8a1c15596c0a77f333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_359d7c52f6d349562bc8510eb334431f2bc25868f851fe8a1c15596c0a77f333->leave($__internal_359d7c52f6d349562bc8510eb334431f2bc25868f851fe8a1c15596c0a77f333_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_910a69f575290471cc73ae522ec3b629da0fc8ce65abc3d3c274f750de0bf60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910a69f575290471cc73ae522ec3b629da0fc8ce65abc3d3c274f750de0bf60f->enter($__internal_910a69f575290471cc73ae522ec3b629da0fc8ce65abc3d3c274f750de0bf60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_910a69f575290471cc73ae522ec3b629da0fc8ce65abc3d3c274f750de0bf60f->leave($__internal_910a69f575290471cc73ae522ec3b629da0fc8ce65abc3d3c274f750de0bf60f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c15b61c643b7f12a6cc65f874804924d70587ea2170bad350485ab4b80a6c289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15b61c643b7f12a6cc65f874804924d70587ea2170bad350485ab4b80a6c289->enter($__internal_c15b61c643b7f12a6cc65f874804924d70587ea2170bad350485ab4b80a6c289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c15b61c643b7f12a6cc65f874804924d70587ea2170bad350485ab4b80a6c289->leave($__internal_c15b61c643b7f12a6cc65f874804924d70587ea2170bad350485ab4b80a6c289_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
