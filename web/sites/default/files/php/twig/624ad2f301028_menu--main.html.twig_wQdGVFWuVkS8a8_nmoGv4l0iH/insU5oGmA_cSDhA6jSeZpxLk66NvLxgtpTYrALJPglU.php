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

/* themes/contrib/yg_multipurpose/templates/navigation/menu--main.html.twig */
class __TwigTemplate_b513115b53e5d68fd9876cdd6e58870b849f87a0fc2bb58de0da6761de58ef12 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 31, "if" => 33, "for" => 38, "set" => 40];
        $filters = ["escape" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
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
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
        // line 82
        echo "    </ul>
</div>
";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 34
                echo "     <div class=\"collapse navbar-collapse \" id=\"navbarYGCorp\">
   <ul class=\"navbar-nav ml-auto\">
  ";
            }
            // line 37
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 38
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 40
                        echo "          ";
                        $context["active_url"] = false;
                        // line 41
                        echo "          ";
                        $context["active_class"] = "";
                        // line 42
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 43
                            echo "            ";
                            if (((($context["active_url"] ?? null) == false) && $this->getAttribute($context["child"], "in_active_trail", []))) {
                                // line 44
                                echo "              ";
                                $context["active_url"] = true;
                                echo " 
              ";
                                // line 45
                                $context["active_class"] = "active";
                                echo "   
            ";
                            }
                            // line 47
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "          <li class='nav-item dropdown ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null)), "html", null, true);
                        echo "'>
            <a class=\"nav-link\" href=\"#\" id=\"navbarDropdownMenu-";
                        // line 49
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
                        // line 50
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "  <i class=\"fa fa-chevron-down\"></i>
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenu-";
                        // line 52
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "\">
              <ul>
              ";
                        // line 54
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
              </ul>
            </div>
          </li>
      ";
                    } else {
                        // line 59
                        echo "            ";
                        // line 60
                        $context["classes"] = [0 => (($this->getAttribute(                        // line 61
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                        // line 64
                        echo "            ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 65
                            echo "              <li ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                            echo ">
                <a href=\"";
                            // line 66
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                            echo "\">
                    ";
                            // line 67
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                            echo "
                </a>
              </li>
            ";
                        } else {
                            // line 71
                            echo "              <li>
                <a class=\"dropdown-item\" href=\"";
                            // line 72
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                            echo "\">
                  ";
                            // line 73
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                            echo "
                </a>
              </li>
            ";
                        }
                        // line 77
                        echo "      ";
                    }
                    // line 78
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "  ";
            }
            // line 80
            echo "  
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_multipurpose/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 80,  211 => 79,  205 => 78,  202 => 77,  195 => 73,  191 => 72,  188 => 71,  181 => 67,  177 => 66,  172 => 65,  169 => 64,  167 => 61,  166 => 60,  164 => 59,  156 => 54,  151 => 52,  146 => 50,  142 => 49,  137 => 48,  131 => 47,  126 => 45,  121 => 44,  118 => 43,  113 => 42,  110 => 41,  107 => 40,  104 => 39,  99 => 38,  96 => 37,  91 => 34,  88 => 33,  85 => 32,  71 => 31,  65 => 82,  60 => 29,  57 => 24,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_multipurpose/templates/navigation/menu--main.html.twig", "/var/www/html/polymerz/web/themes/contrib/yg_multipurpose/templates/navigation/menu--main.html.twig");
    }
}
