<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2ace783b508e2369b5be6fdb8cc26a46e20f9bb55f0df8c9256f2d9027f272e5 extends Twig_Template
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
        $__internal_eb9f9c5c54c9e44d7b408f17ef11ffdea64023638d924342595e67d3e6ab6b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9f9c5c54c9e44d7b408f17ef11ffdea64023638d924342595e67d3e6ab6b4e->enter($__internal_eb9f9c5c54c9e44d7b408f17ef11ffdea64023638d924342595e67d3e6ab6b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_eb9f9c5c54c9e44d7b408f17ef11ffdea64023638d924342595e67d3e6ab6b4e->leave($__internal_eb9f9c5c54c9e44d7b408f17ef11ffdea64023638d924342595e67d3e6ab6b4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
