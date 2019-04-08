<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/yg_architect/templates/page.html.twig */
class __TwigTemplate_4048b6afbf376e3d1aa74af880f5b22bc9bac40b3487e526680b9cca472430dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 32, "if" => 67];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "\t\t
\t<div class=\"fh5co-loader\"></div>
\t
\t<div id=\"page\">

\t<nav class=\"fh5co-nav\" role=\"navigation\">
\t\t<div class=\"container\">
\t\t\t<div class=\"top-menu\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div id=\"fh5co-logo\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "<span>.</span></a></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</nav>


\t<div class=\"container\">

\t\t<div id=\"fh5co-intro\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 col-md-pull-2\">
\t\t\t\t\t<h2>";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
        echo "</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<section ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">
\t\t  ";
        // line 32
        echo "\t\t  ";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t</section>

\t</div>
<div class=\"container\">
\t\t<footer id=\"fh5co-footer\" role=\"contentinfo\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 fh5co-widget\">
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_1", [])), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_2", [])), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-md-push-1 fh5co-footer-links\">
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_3", [])), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 fh5co-footer-links\">
\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_4", [])), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row copyright\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<small class=\"block\">&copy; 2018 YG Architect. All Rights Reserved.</small> 
\t\t\t\t\t\t<small class=\"block\">Designed by <a href=\"http://freehtml5.co/\" target=\"_blank\">FreeHTML5.co</a> Druapl theme by <a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\">Drupal Developers Studio</a></small>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<ul class=\"fh5co-social-icons\">
\t\t\t\t\t\t";
        // line 67
        if (($context["facebook"] ?? null)) {
            // line 68
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 69
        echo "\t

\t\t\t\t\t\t";
        // line 71
        if (($context["twitter"] ?? null)) {
            // line 72
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 73
        echo "\t

\t\t\t\t\t\t";
        // line 75
        if (($context["linkedin"] ?? null)) {
            // line 76
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 78
        echo "
\t\t\t\t\t\t";
        // line 79
        if (($context["dribbble"] ?? null)) {
            // line 80
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dribbble"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div><!-- END container -->

</div>


<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up2\"></i></a>
\t</div>";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        // line 33
        echo "\t\t    <a id=\"main-content\"></a>
\t\t    ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_architect/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 34,  212 => 33,  209 => 32,  193 => 82,  187 => 80,  185 => 79,  182 => 78,  176 => 76,  174 => 75,  170 => 73,  164 => 72,  162 => 71,  158 => 69,  152 => 68,  150 => 67,  134 => 54,  127 => 50,  120 => 46,  114 => 43,  105 => 36,  102 => 32,  98 => 30,  91 => 26,  75 => 13,  68 => 11,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_architect/templates/page.html.twig", "/home/username/Projects/bildergalerie/web/themes/contrib/yg_architect/templates/page.html.twig");
    }
}
