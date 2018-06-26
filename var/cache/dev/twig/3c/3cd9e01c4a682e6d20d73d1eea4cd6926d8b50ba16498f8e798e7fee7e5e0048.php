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
        $__internal_4a32d34aef812038011ea86d506c8656bea6bc4271c5bce4c75112f242566dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a32d34aef812038011ea86d506c8656bea6bc4271c5bce4c75112f242566dc5->enter($__internal_4a32d34aef812038011ea86d506c8656bea6bc4271c5bce4c75112f242566dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a32d34aef812038011ea86d506c8656bea6bc4271c5bce4c75112f242566dc5->leave($__internal_4a32d34aef812038011ea86d506c8656bea6bc4271c5bce4c75112f242566dc5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4084f4796013b3af8d3a9e213cf7c8f6dffe1957291bb34c22e2f68933acbdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4084f4796013b3af8d3a9e213cf7c8f6dffe1957291bb34c22e2f68933acbdde->enter($__internal_4084f4796013b3af8d3a9e213cf7c8f6dffe1957291bb34c22e2f68933acbdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4084f4796013b3af8d3a9e213cf7c8f6dffe1957291bb34c22e2f68933acbdde->leave($__internal_4084f4796013b3af8d3a9e213cf7c8f6dffe1957291bb34c22e2f68933acbdde_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89e158c42a21955a1bd0a143f4288a1363ac82e4ac9601bfefbf704f6fc17566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e158c42a21955a1bd0a143f4288a1363ac82e4ac9601bfefbf704f6fc17566->enter($__internal_89e158c42a21955a1bd0a143f4288a1363ac82e4ac9601bfefbf704f6fc17566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89e158c42a21955a1bd0a143f4288a1363ac82e4ac9601bfefbf704f6fc17566->leave($__internal_89e158c42a21955a1bd0a143f4288a1363ac82e4ac9601bfefbf704f6fc17566_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4a916b47ac4010cf06e82b324c2535b49a85a95582ee434b9704603df459df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a916b47ac4010cf06e82b324c2535b49a85a95582ee434b9704603df459df7->enter($__internal_c4a916b47ac4010cf06e82b324c2535b49a85a95582ee434b9704603df459df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4a916b47ac4010cf06e82b324c2535b49a85a95582ee434b9704603df459df7->leave($__internal_c4a916b47ac4010cf06e82b324c2535b49a85a95582ee434b9704603df459df7_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
