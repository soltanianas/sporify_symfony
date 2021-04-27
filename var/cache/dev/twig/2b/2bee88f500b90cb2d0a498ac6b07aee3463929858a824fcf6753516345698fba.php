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

/* event/liste_event.html.twig */
class __TwigTemplate_3412bc88230c4bea859d3950812bf900afa4937d9150c11d4eaa857df5a94dfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/liste_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/liste_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/liste_event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Evenements</h1>
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri_event");
        echo "\">Trier par ordre décroissant</a>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <div class=\"form-group row\">
            <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\", method=\"post\">
            <div class=\"col-md-3\">
                <label class=\"form__label\">Recherche par titre ou description</label>
                <input type=\"text\"  name=\"search\"  class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>
            </form>
        </div>
        <br>
        ";
        // line 24
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24))) {
            // line 25
            echo "            <div class=\"col-sm-12 alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), 'errors');
            echo "</div>
        ";
        }
        // line 27
        echo "        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 41
            echo "                <tr>
                    <td> <img style=\"width: 100px\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 42))), "html", null, true);
            echo "\"> </td>
                    <td >";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 45), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 46), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!--  Delete Modal -->
                <div class=\"modal fade\" id=\"deleteModal";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer le event ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 62), "html", null, true);
            echo "</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_event", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                                    <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                                </div>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>


               <!--  Update Modal -->
                <div class=\"modal fade\" id=\"updateModal";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_event", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier le evenement</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"title\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Emplacement</label>
                                            <input type=\"text\"  name=\"location\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 97), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 104), "html", null, true);
            echo "</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 111), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 118), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Photo du couverture</label>
                                            <input type=\"file\" name=\"image\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "            </tbody>
        </table>
    </div>


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 149
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un nouveau evenement</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Emplacement</label>
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "location", [], "any", false, false, false, 158), 'widget', ["attr" => ["placeholder" => "Emplacement du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Titre</label>
                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "titre", [], "any", false, false, false, 165), 'widget', ["attr" => ["placeholder" => "Titre du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Description</label>
                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "description", [], "any", false, false, false, 173), 'widget', ["attr" => ["placeholder" => "Description du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date debut</label>
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "dateDebut", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "dateFin", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo du couverture</label>
                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "image", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                </div>
                ";
        // line 204
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/liste_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 204,  352 => 195,  342 => 188,  332 => 181,  321 => 173,  310 => 165,  300 => 158,  288 => 149,  277 => 140,  249 => 118,  239 => 111,  229 => 104,  219 => 97,  209 => 90,  196 => 80,  190 => 77,  175 => 65,  169 => 62,  161 => 57,  152 => 51,  147 => 49,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  125 => 42,  122 => 41,  118 => 40,  103 => 27,  97 => 25,  95 => 24,  81 => 13,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Evenements</h1>
            <a href=\"{{ path('tri_event') }}\">Trier par ordre décroissant</a>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <div class=\"form-group row\">
            <form action=\"{{ path('search') }}\", method=\"post\">
            <div class=\"col-md-3\">
                <label class=\"form__label\">Recherche par titre ou description</label>
                <input type=\"text\"  name=\"search\"  class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>
            </form>
        </div>
        <br>
        {% if form.titre.vars.errors|length %}
            <div class=\"col-sm-12 alert alert-danger\">{{ form_errors(form.titre) }}</div>
        {% endif %}
        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for event in events %}
                <tr>
                    <td> <img style=\"width: 100px\" src=\"{{ asset('uploads/' ~ event.image) }}\"> </td>
                    <td >{{ event.titre }}</td>
                    <td>{{ event.description }}</td>
                    <td>{{ event.dateDebut|date(\"m-d-Y\") }}</td>
                    <td>{{ event.dateFin|date(\"m-d-Y\") }}</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal{{ event.id }}\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ event.id }}\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!--  Delete Modal -->
                <div class=\"modal fade\" id=\"deleteModal{{ event.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer le event {{ event.titre }}</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"{{ path('delete_event', {'id':event.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                                    <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                                </div>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>


               <!--  Update Modal -->
                <div class=\"modal fade\" id=\"updateModal{{ event.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"{{ path('update_event', {'id':event.id}) }}\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier le evenement</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"title\" value=\"{{ event.titre }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Emplacement</label>
                                            <input type=\"text\"  name=\"location\" value=\"{{ event.location }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">{{ event.description }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"{{ event.dateDebut|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"{{ event.dateFin|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Photo du couverture</label>
                                            <input type=\"file\" name=\"image\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            {% endfor %}
            </tbody>
        </table>
    </div>


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un nouveau evenement</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Emplacement</label>
                            {{ form_widget(form.location, {'attr': {'placeholder': 'Emplacement du projet', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Titre</label>
                            {{ form_widget(form.titre, {'attr': {'placeholder': 'Titre du projet', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Description</label>
                            {{ form_widget(form.description, {'attr': {'placeholder': 'Description du projet', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date debut</label>
                            {{ form_widget(form.dateDebut, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            {{ form_widget(form.dateFin, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo du couverture</label>
                            {{ form_widget(form.image, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>


{% endblock %}", "event/liste_event.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\project\\sporify\\templates\\event\\liste_event.html.twig");
    }
}
