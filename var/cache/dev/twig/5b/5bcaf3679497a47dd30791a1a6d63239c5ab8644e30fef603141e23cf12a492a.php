<?php

/* :internaute:new.html.twig */
class __TwigTemplate_6e744c1e2e5c542476d2fdf89eb0ce7be23db8b7e0dd78a34f25e2452c1f9bfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":internaute:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea0b93a2daff66c2d609733100c08ac43fa93d35361a571cd0cf15a91f1bbc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0b93a2daff66c2d609733100c08ac43fa93d35361a571cd0cf15a91f1bbc39->enter($__internal_ea0b93a2daff66c2d609733100c08ac43fa93d35361a571cd0cf15a91f1bbc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":internaute:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0b93a2daff66c2d609733100c08ac43fa93d35361a571cd0cf15a91f1bbc39->leave($__internal_ea0b93a2daff66c2d609733100c08ac43fa93d35361a571cd0cf15a91f1bbc39_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_418b8e45077c9b578a6732c72a31e5902142c3f68e8c88fae20a9bc9e70714d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418b8e45077c9b578a6732c72a31e5902142c3f68e8c88fae20a9bc9e70714d5->enter($__internal_418b8e45077c9b578a6732c72a31e5902142c3f68e8c88fae20a9bc9e70714d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Internaute creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_418b8e45077c9b578a6732c72a31e5902142c3f68e8c88fae20a9bc9e70714d5->leave($__internal_418b8e45077c9b578a6732c72a31e5902142c3f68e8c88fae20a9bc9e70714d5_prof);

    }

    public function getTemplateName()
    {
        return ":internaute:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle:Default:layout.html.twig' %}

{% block content %}
    <h1>Internaute creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('internaute_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":internaute:new.html.twig", "/home/ubuntu/convoit/app/Resources/views/internaute/new.html.twig");
    }
}
