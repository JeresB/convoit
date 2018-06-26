<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0cb5a2d5d8be55ad9193f4e9d03ae5bd5be0d0f3bb48f60db37faf06f7964a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6e989a159856a47275a6b9eb945bd0cf726d36771becef7af75ab7f5f5719056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e989a159856a47275a6b9eb945bd0cf726d36771becef7af75ab7f5f5719056->enter($__internal_6e989a159856a47275a6b9eb945bd0cf726d36771becef7af75ab7f5f5719056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e989a159856a47275a6b9eb945bd0cf726d36771becef7af75ab7f5f5719056->leave($__internal_6e989a159856a47275a6b9eb945bd0cf726d36771becef7af75ab7f5f5719056_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fa4ad46eb45069a7efed865fc0229d389f5acf6a3a7d117f0a1547d82bc4ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa4ad46eb45069a7efed865fc0229d389f5acf6a3a7d117f0a1547d82bc4ca4->enter($__internal_0fa4ad46eb45069a7efed865fc0229d389f5acf6a3a7d117f0a1547d82bc4ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fa4ad46eb45069a7efed865fc0229d389f5acf6a3a7d117f0a1547d82bc4ca4->leave($__internal_0fa4ad46eb45069a7efed865fc0229d389f5acf6a3a7d117f0a1547d82bc4ca4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3da3a0da35dbd763fbcf7dd4e316accaa6be619ddc4321fb1229984c9fa15f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da3a0da35dbd763fbcf7dd4e316accaa6be619ddc4321fb1229984c9fa15f6f->enter($__internal_3da3a0da35dbd763fbcf7dd4e316accaa6be619ddc4321fb1229984c9fa15f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3da3a0da35dbd763fbcf7dd4e316accaa6be619ddc4321fb1229984c9fa15f6f->leave($__internal_3da3a0da35dbd763fbcf7dd4e316accaa6be619ddc4321fb1229984c9fa15f6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33512ec119eb9421b656b49e5b275cd0109359ee329ad7ffc343973921492f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33512ec119eb9421b656b49e5b275cd0109359ee329ad7ffc343973921492f5c->enter($__internal_33512ec119eb9421b656b49e5b275cd0109359ee329ad7ffc343973921492f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33512ec119eb9421b656b49e5b275cd0109359ee329ad7ffc343973921492f5c->leave($__internal_33512ec119eb9421b656b49e5b275cd0109359ee329ad7ffc343973921492f5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
