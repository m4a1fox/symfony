<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5f40c87783f09492a4d71dbf5d6f1482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true);
        echo " (";
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 4,  48 => 7,  25 => 3,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  171 => 59,  164 => 55,  160 => 54,  155 => 51,  153 => 50,  149 => 48,  143 => 46,  137 => 45,  126 => 43,  116 => 36,  107 => 31,  82 => 27,  67 => 24,  112 => 34,  102 => 19,  63 => 23,  56 => 12,  38 => 7,  32 => 11,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 26,  29 => 6,  24 => 6,  19 => 1,  61 => 13,  58 => 8,  46 => 14,  44 => 7,  37 => 8,  20 => 2,  182 => 32,  174 => 60,  170 => 49,  167 => 48,  163 => 46,  157 => 45,  146 => 47,  135 => 41,  123 => 39,  118 => 38,  115 => 37,  113 => 36,  108 => 33,  105 => 32,  99 => 29,  88 => 25,  85 => 28,  78 => 15,  65 => 19,  55 => 16,  52 => 6,  49 => 14,  42 => 9,  40 => 12,  36 => 6,  33 => 7,  30 => 4,  27 => 3,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 31,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 40,  68 => 14,  64 => 13,  60 => 22,  57 => 22,  54 => 10,  50 => 11,  47 => 8,  43 => 7,  39 => 15,  35 => 4,  31 => 9,  28 => 3,);
    }
}