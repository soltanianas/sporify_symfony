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

/* pages/event/liste_event_front.html.twig */
class __TwigTemplate_48774a5ab94ff8e7c022fdc817a39205ddfa0141bd7485dc36a7790cb76f88f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/event/liste_event_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/event/liste_event_front.html.twig"));

        $this->parent = $this->loadTemplate("layout/index.html.twig", "pages/event/liste_event_front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<title>Events - All</title>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <section class=\"section breadcrumb-section\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/image-10-1920x232.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <h2 class=\"breadcrumb-section-title\">News 1</h2>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb\">
                <div class=\"breadcrumb-inner\">
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">News</a></div>
                    <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">News 1</span></div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"section-md bg-transparent\">
        <div class=\"container\">
            <h3>Liste des Evenements</h3>

            <div class=\"row\">
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 29
            echo "                        <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                            <!-- Post-->
                            <div class=\"post post-classic\"><a class=\"post-media\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#mm";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"><img class=\"post-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 200px;height: 200px; object-fit: cover\">
                                    <div class=\"post-tag tag tag-secondary\">News</div></a>
                                <div class=\"post-body\">
                                    <div class=\"post-title h4\"><a href=\"#\"><span>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 34), "html", null, true);
            echo "</span></a></div>
                                    <div class=\"post-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</div>
                                    <div class=\"post-meta\">
                                        <div class=\"post-date\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 37), "m-d-Y"), "html", null, true);
            echo "</div>
                                        <div class=\"post-date\">";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 38), "m-d-Y"), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                            <div class=\"modal fade\" id=\"mm";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-body\">
                                            <img class=\"post-img\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 49))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100%;height: 200px; object-fit: cover\">
                                            <br>
                                            <br><br>
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Event: ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                                            <br>
                                            <p>Description: event.description</p>
                                            <br>
                                            <h6 class=\"post-date\">";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 56), "m-d-Y"), "html", null, true);
            echo "</h6>
                                            <h6 class=\"post-date\">";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 57), "m-d-Y"), "html", null, true);
            echo "</h6>
                                            <iframe src=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 58), "html", null, true);
            echo "\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/event/liste_event_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 65,  181 => 58,  177 => 57,  173 => 56,  166 => 52,  160 => 49,  153 => 45,  143 => 38,  139 => 37,  134 => 35,  130 => 34,  122 => 31,  118 => 29,  114 => 28,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/index.html.twig' %}

{% block title %}
<title>Events - All</title>
{% endblock %}

{% block body %}
    <section class=\"section breadcrumb-section\" style=\"background-image: url({{ asset('front/images/image-10-1920x232.jpg') }})\">
        <div class=\"container\">
            <h2 class=\"breadcrumb-section-title\">News 1</h2>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb\">
                <div class=\"breadcrumb-inner\">
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">News</a></div>
                    <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">News 1</span></div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"section-md bg-transparent\">
        <div class=\"container\">
            <h3>Liste des Evenements</h3>

            <div class=\"row\">
                        {% for event in events %}
                        <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                            <!-- Post-->
                            <div class=\"post post-classic\"><a class=\"post-media\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#mm{{ event.id }}\"><img class=\"post-img\" src=\"{{ asset('uploads/' ~ event.image) }}\" alt=\"\" style=\"width: 200px;height: 200px; object-fit: cover\">
                                    <div class=\"post-tag tag tag-secondary\">News</div></a>
                                <div class=\"post-body\">
                                    <div class=\"post-title h4\"><a href=\"#\"><span>{{ event.titre }}</span></a></div>
                                    <div class=\"post-text\">{{ event.description }}</div>
                                    <div class=\"post-meta\">
                                        <div class=\"post-date\">{{ event.dateDebut|date(\"m-d-Y\") }}</div>
                                        <div class=\"post-date\">{{ event.dateFin|date(\"m-d-Y\") }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                            <div class=\"modal fade\" id=\"mm{{ event.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-body\">
                                            <img class=\"post-img\" src=\"{{ asset('uploads/' ~ event.image) }}\" alt=\"\" style=\"width: 100%;height: 200px; object-fit: cover\">
                                            <br>
                                            <br><br>
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Event: {{ event.titre }}</h5>
                                            <br>
                                            <p>Description: event.description</p>
                                            <br>
                                            <h6 class=\"post-date\">{{ event.dateDebut|date(\"m-d-Y\") }}</h6>
                                            <h6 class=\"post-date\">{{ event.dateFin|date(\"m-d-Y\") }}</h6>
                                            <iframe src=\"{{ event.location }}\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {% endfor %}
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "pages/event/liste_event_front.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\project\\sporify\\templates\\pages\\event\\liste_event_front.html.twig");
    }
}
