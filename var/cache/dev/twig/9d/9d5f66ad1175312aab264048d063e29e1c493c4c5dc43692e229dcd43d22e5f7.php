<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e26abf44abaa257895bf17c5f3b6e00c92f67d7ceb78866af68ab5e34c3f9d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26abf44abaa257895bf17c5f3b6e00c92f67d7ceb78866af68ab5e34c3f9d01->enter($__internal_e26abf44abaa257895bf17c5f3b6e00c92f67d7ceb78866af68ab5e34c3f9d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e26abf44abaa257895bf17c5f3b6e00c92f67d7ceb78866af68ab5e34c3f9d01->leave($__internal_e26abf44abaa257895bf17c5f3b6e00c92f67d7ceb78866af68ab5e34c3f9d01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_952fe3ae22caef970719c4c03541649efd9a8378f40e0e7391e4a66b7637c0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952fe3ae22caef970719c4c03541649efd9a8378f40e0e7391e4a66b7637c0f0->enter($__internal_952fe3ae22caef970719c4c03541649efd9a8378f40e0e7391e4a66b7637c0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_952fe3ae22caef970719c4c03541649efd9a8378f40e0e7391e4a66b7637c0f0->leave($__internal_952fe3ae22caef970719c4c03541649efd9a8378f40e0e7391e4a66b7637c0f0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d404e50e0932a848049df94760470a72cf400376eb5ed45f2166566f28124045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d404e50e0932a848049df94760470a72cf400376eb5ed45f2166566f28124045->enter($__internal_d404e50e0932a848049df94760470a72cf400376eb5ed45f2166566f28124045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d404e50e0932a848049df94760470a72cf400376eb5ed45f2166566f28124045->leave($__internal_d404e50e0932a848049df94760470a72cf400376eb5ed45f2166566f28124045_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b32bf586a31e73be9b915ff57c7dc04829e82e53bf53c67898921d45ba3379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b32bf586a31e73be9b915ff57c7dc04829e82e53bf53c67898921d45ba3379->enter($__internal_b1b32bf586a31e73be9b915ff57c7dc04829e82e53bf53c67898921d45ba3379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1b32bf586a31e73be9b915ff57c7dc04829e82e53bf53c67898921d45ba3379->leave($__internal_b1b32bf586a31e73be9b915ff57c7dc04829e82e53bf53c67898921d45ba3379_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4693afbe8d9b6e5d4ebe1e2773bde048bf6037f895c354df0abc8cac048ebbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4693afbe8d9b6e5d4ebe1e2773bde048bf6037f895c354df0abc8cac048ebbea->enter($__internal_4693afbe8d9b6e5d4ebe1e2773bde048bf6037f895c354df0abc8cac048ebbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4693afbe8d9b6e5d4ebe1e2773bde048bf6037f895c354df0abc8cac048ebbea->leave($__internal_4693afbe8d9b6e5d4ebe1e2773bde048bf6037f895c354df0abc8cac048ebbea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/ubuntu/convoit/app/Resources/views/base.html.twig");
    }
}
