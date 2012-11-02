<?php

/* AcmeHelloBundle:Default:def.html.twig */
class __TwigTemplate_399f3966b5c20ca7225d3ac8dc0bb2fa extends Twig_Template
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
        // line 1
        echo "<h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:def.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
