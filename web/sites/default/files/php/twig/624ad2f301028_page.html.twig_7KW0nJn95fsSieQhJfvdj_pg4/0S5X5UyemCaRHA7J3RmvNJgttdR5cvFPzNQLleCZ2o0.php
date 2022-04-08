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

/* themes/contrib/yg_multipurpose/templates/layout/page.html.twig */
class __TwigTemplate_0b05e17cd37e5b520b7e54bb23192c8843780b305a04feca92a86de40b9fff7d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7, "set" => 50];
        $filters = ["escape" => 8, "render" => 51];
        $functions = ["url" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'render'],
                ['url']
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
        echo "  <!-- Topbar -->
    <section id=\"topbar\" class=\"main-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-6 col-sm-6 col-md-7 col-lg-9\">
                      <ul class=\"contact-info\">
                            ";
        // line 7
        if (($context["company_phone_no"] ?? null)) {
            // line 8
            echo "                                <li><a href=\"tel:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_phone_no"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_phone_no"] ?? null)), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 9
        echo " 
                            ";
        // line 10
        if (($context["company_email"] ?? null)) {
            // line 11
            echo "                                  <li><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_email"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_email"] ?? null)), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 13
        echo "                      </ul>
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-5 col-lg-3\">
                      <ul>
                          ";
        // line 17
        if (($context["facebook"] ?? null)) {
            // line 18
            echo "                              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                          ";
        }
        // line 20
        echo "                          ";
        if (($context["twitter"] ?? null)) {
            // line 21
            echo "                              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            ";
        }
        // line 23
        echo "                            ";
        if (($context["linkedin"] ?? null)) {
            // line 24
            echo "                              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            ";
        }
        // line 26
        echo "                            ";
        if (($context["pinterest"] ?? null)) {
            // line 27
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                            ";
        }
        // line 29
        echo "                            ";
        if (($context["dribbble"] ?? null)) {
            // line 30
            echo "                              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dribbble"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                          ";
        }
        // line 32
        echo "                      </ul>
                </div>
            </div>
        </div> <!-- end container -->
    </section> 
  <!-- end topbar -->

 <!-- Header -->
    <header>
      <nav id=\"menu\" class=\"navbar navbar-expand-lg\">
        <div class=\"container\">
            ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarYGCorp\" aria-controls=\"navbarYGCorp\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"fa fa-bars\"></span></button>
            ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
        </nav>
    </header>
  <!-- Header End --> 

";
        // line 50
        $context["url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>");
        // line 51
        if (twig_in_filter("user", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["url"] ?? null))))) {
            echo "     
  <!--Start Slider Area-->
  <section id=\"slider\" class=\"slider-area\">
    <div class=\"item\" style=\"background-image: url(";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_image"] ?? null)), "html", null, true);
            echo ")\">
      <div class=\"overlay\"></div>
      <div class=\"slide-caption\">
        <div class=\"slider-inner\">
          <h1 class=\"animated fadeInUpBig\">";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "#title", [], "array")), "html", null, true);
            echo "</h1>
        </div>
      </div>
    </div>
  </section>
  <!--End Slider Area-->
";
        }
        // line 65
        echo "
";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "


    <!-- footer start -->
    <footer>
        <div class=\"container\">
            <div class=\"row footer-top\">
                <div class=\"col-xl-4 col-lg-3 col-md-6 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                      ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_1", [])), "html", null, true);
        echo "
                </div>
                 <div class=\"col-xl-2 col-lg-2 col-md-6 wow fadeInDown\" data-wow-delay=\"0.9s\">
                    <div class=\"pd\">
                      ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_2", [])), "html", null, true);
        echo "
                    </div>
                </div>  
                <div class=\"col-xl-3 col-lg-4 col-md-6 contact wow fadeInRight\" data-wow-delay=\"0.12s\">
                    <h2>";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_header"] ?? null)), "html", null, true);
        echo "</h2>
                    <p><i class=\"fa fa-map-marker\"></i><span>";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_address"] ?? null)), "html", null, true);
        echo "</span></p>
                    <a href=\"mailto:";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_email"] ?? null)), "html", null, true);
        echo "\"><i class=\"fa fa-envelope\"></i>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_email"] ?? null)), "html", null, true);
        echo "</a>
                    <a href=\"tel:";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_phone_no"] ?? null)), "html", null, true);
        echo "\"><i class=\"fa fa-phone\"></i>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_phone_no"] ?? null)), "html", null, true);
        echo "</a>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 pd wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <h2>";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null)), "html", null, true);
        echo "</h2>
                    <div class=\"pd\">
                      <ul class=\"social\">
                         ";
        // line 91
        if (($context["facebook"] ?? null)) {
            // line 92
            echo "                              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                          ";
        }
        // line 94
        echo "                          ";
        if (($context["twitter"] ?? null)) {
            // line 95
            echo "                              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                          ";
        }
        // line 97
        echo "                          ";
        if (($context["instagram"] ?? null)) {
            // line 98
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a></li>
                          ";
        }
        // line 100
        echo "                          ";
        if (($context["youtube"] ?? null)) {
            // line 101
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-youtube\"></i></a></li>
                          ";
        }
        // line 103
        echo "                      </ul>  
                    </div>  
                </div> 
            </div>    
        </div>
        <div class=\"copyright\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-6 mx-auto text-center copyright wow fadeInUp\" data-wow-delay=\"0.5s\"> 
              <p> &copy;2018. <a href=\"#\"> YG Multipurpose</a>.&nbsp;All Rights Reserved.<br></p>
              <p class=\"our-info\"> Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\"> Young Globes</a></p>   
          </div>  
            </div>
          </div>
      </div>
    </footer>
    <!-- footer end -->

  <!-- back to top button -->
  <button class=\"scroll-top scroll-to-target\" data-target=\"html\">
      <span class=\"fa fa-long-arrow-up\"></span>
  </button>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_multipurpose/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 103,  272 => 101,  269 => 100,  263 => 98,  260 => 97,  254 => 95,  251 => 94,  245 => 92,  243 => 91,  237 => 88,  229 => 85,  223 => 84,  219 => 83,  215 => 82,  208 => 78,  201 => 74,  190 => 66,  187 => 65,  177 => 58,  170 => 54,  164 => 51,  162 => 50,  154 => 45,  149 => 43,  136 => 32,  130 => 30,  127 => 29,  121 => 27,  118 => 26,  112 => 24,  109 => 23,  103 => 21,  100 => 20,  94 => 18,  92 => 17,  86 => 13,  78 => 11,  76 => 10,  73 => 9,  65 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_multipurpose/templates/layout/page.html.twig", "/var/www/html/polymerz/web/themes/contrib/yg_multipurpose/templates/layout/page.html.twig");
    }
}
