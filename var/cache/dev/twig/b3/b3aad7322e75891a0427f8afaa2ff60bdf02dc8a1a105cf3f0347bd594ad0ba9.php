<?php

/* :voiture:new.html.twig */
class __TwigTemplate_2234bf1e5f9dcc47579aae9b8c86e60077fecc254fec9e31d8ddf3e567d882d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":voiture:new.html.twig", 1);
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
        $__internal_9e3351aec81368f408709ca7bda797b0119513af62f3ff233a2a55997eb657eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3351aec81368f408709ca7bda797b0119513af62f3ff233a2a55997eb657eb->enter($__internal_9e3351aec81368f408709ca7bda797b0119513af62f3ff233a2a55997eb657eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":voiture:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3351aec81368f408709ca7bda797b0119513af62f3ff233a2a55997eb657eb->leave($__internal_9e3351aec81368f408709ca7bda797b0119513af62f3ff233a2a55997eb657eb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_842186d9002fcbd675c58a147c65a069a40a8598013a65413e499e9cee6ee929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842186d9002fcbd675c58a147c65a069a40a8598013a65413e499e9cee6ee929->enter($__internal_842186d9002fcbd675c58a147c65a069a40a8598013a65413e499e9cee6ee929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"car icon\"></i>
      Création Voiture
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_index");
        echo "\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_842186d9002fcbd675c58a147c65a069a40a8598013a65413e499e9cee6ee929->leave($__internal_842186d9002fcbd675c58a147c65a069a40a8598013a65413e499e9cee6ee929_prof);

    }

    public function getTemplateName()
    {
        return ":voiture:new.html.twig";
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
      <i class=\"car icon\"></i>
      Création Voiture
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
        <a class=\"ui primary button\" href=\"{{ path('voiture_index') }}\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", ":voiture:new.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/app/Resources/views/voiture/new.html.twig");
    }
}
