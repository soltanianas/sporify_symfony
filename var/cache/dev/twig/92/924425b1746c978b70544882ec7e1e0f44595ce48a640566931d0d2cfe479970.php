<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sidebar.html.twig */
class __TwigTemplate_12052786dae7d69bfb98032a5221bfc7f13922dfc979969ccc38b164f412ee14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar\" data-color=\"white\" data-active-color=\"danger\">
    <div class=\"logo\">
        <a href=\"https://www.creative-tim.com\" class=\"simple-text logo-mini\">
            <div class=\"logo-image-small\">
                <img src=\"../assets/img/logo-small.png\">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href=\"https://www.creative-tim.com\" class=\"simple-text logo-normal\">
            Creative Tim
            <!-- <div class=\"logo-image-big\">
              <img src=\"../assets/img/logo-big.png\">
            </div> -->
        </a>
    </div>
    <div class=\"sidebar-wrapper\">
        <ul class=\"nav\">
            <li>
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events");
        echo "\">
                    <i class=\"nc-icon nc-shop\"></i>
                    <p>Events</p>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promos");
        echo "\">
                    <i class=\"nc-icon nc-caps-small\"></i>
                    <p>Promotions</p>
                </a>
            </li>

            <li class=\"active-pro\">
                <a href=\"./upgrade.html\">
                    <i class=\"nc-icon nc-spaceship\"></i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar\" data-color=\"white\" data-active-color=\"danger\">
    <div class=\"logo\">
        <a href=\"https://www.creative-tim.com\" class=\"simple-text logo-mini\">
            <div class=\"logo-image-small\">
                <img src=\"../assets/img/logo-small.png\">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href=\"https://www.creative-tim.com\" class=\"simple-text logo-normal\">
            Creative Tim
            <!-- <div class=\"logo-image-big\">
              <img src=\"../assets/img/logo-big.png\">
            </div> -->
        </a>
    </div>
    <div class=\"sidebar-wrapper\">
        <ul class=\"nav\">
            <li>
                <a href=\"{{ path('admin_events') }}\">
                    <i class=\"nc-icon nc-shop\"></i>
                    <p>Events</p>
                </a>
            </li>
            <li>
                <a href=\"{{ path('admin_promos') }}\">
                    <i class=\"nc-icon nc-caps-small\"></i>
                    <p>Promotions</p>
                </a>
            </li>

            <li class=\"active-pro\">
                <a href=\"./upgrade.html\">
                    <i class=\"nc-icon nc-spaceship\"></i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>
", "sidebar.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\project\\sporify\\templates\\sidebar.html.twig");
    }
}
