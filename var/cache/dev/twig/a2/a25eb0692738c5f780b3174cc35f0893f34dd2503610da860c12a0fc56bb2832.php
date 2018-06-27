<?php

/* :ville:new.html.twig */
class __TwigTemplate_b688c2def2d3f0b12eef090b4aa74c023c07edaad89ed50bd865a07a9b5d7de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":ville:new.html.twig", 1);
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
        $__internal_3255fc8e582feb345643c6a8cbd78d1faeaafa704341e5fa304ea9c98b2a1154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3255fc8e582feb345643c6a8cbd78d1faeaafa704341e5fa304ea9c98b2a1154->enter($__internal_3255fc8e582feb345643c6a8cbd78d1faeaafa704341e5fa304ea9c98b2a1154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3255fc8e582feb345643c6a8cbd78d1faeaafa704341e5fa304ea9c98b2a1154->leave($__internal_3255fc8e582feb345643c6a8cbd78d1faeaafa704341e5fa304ea9c98b2a1154_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_af9e4ee4fca76642cfb63e5314ee913d5994f09c3541f62ea48c2fc0a6c01d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9e4ee4fca76642cfb63e5314ee913d5994f09c3541f62ea48c2fc0a6c01d76->enter($__internal_af9e4ee4fca76642cfb63e5314ee913d5994f09c3541f62ea48c2fc0a6c01d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"home icon\"></i>
      Création Ville
    </h1>

    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
      <div class=\"six wide column\">
        <input class=\"ui primary button\" type=\"submit\" value=\"Creer\" />
        ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
      <div class=\"six wide column\">
        <a class=\"ui primary button\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_af9e4ee4fca76642cfb63e5314ee913d5994f09c3541f62ea48c2fc0a6c01d76->leave($__internal_af9e4ee4fca76642cfb63e5314ee913d5994f09c3541f62ea48c2fc0a6c01d76_prof);

    }

    public function getTemplateName()
    {
        return ":ville:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 17,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"home icon\"></i>
      Création Ville
    </h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
      <div class=\"six wide column\">
        <input class=\"ui primary button\" type=\"submit\" value=\"Creer\" />
        {{ form_end(form) }}
      </div>
      <div class=\"six wide column\">
        <a class=\"ui primary button\" href=\"{{ path('ville_index') }}\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", ":ville:new.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/app/Resources/views/ville/new.html.twig");
    }
}
