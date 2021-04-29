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

/* promo/liste_promo.html.twig */
class __TwigTemplate_48cff4e36be0f83f3a7bc4385af0024308eea45ad2a3fe8fa99a922683414cbf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promo/liste_promo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promo/liste_promo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promo/liste_promo.html.twig", 1);
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
            <h1 style=\"margin-right: 20px\">Liste des Promotions</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <br>
        ";
        // line 12
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "pourcentage", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12))) {
            // line 13
            echo "            <div class=\"col-sm-12 alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "pourcentage", [], "any", false, false, false, 13), 'errors');
            echo "</div>
        ";
        }
        // line 15
        echo "        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Pourcentage</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Type produit</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 30
            echo "                <tr>
                    <td >";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "pourcentage", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td >";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "titre", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "DateDebut", [], "any", false, false, false, 34), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "DateFin", [], "any", false, false, false, 35), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "typeProduit", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!-- Delete Modal -->
              <div class=\"modal fade\" id=\"deleteModal";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer la promotion ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "titre", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_promo", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 55)]), "html", null, true);
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
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_promo", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier la promotion </h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"titre\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "titre", [], "any", false, false, false, 80), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Type de produit</label>
                                            <select name=\"type_produit\" class=\"form-control\">
                                                <option value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "typeProduit", [], "any", false, false, false, 89), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "typeProduit", [], "any", false, false, false, 89), "html", null, true);
            echo "</option>
                                                <option value=\"Tshirts\">Tshirts</option>
                                                <option value=\"Vestes\">Vestes</option>
                                                <option value=\"Equipement\">Equipement</option>
                                                <option value=\"Pantalons\">Pantalons</option>
                                                <option value=\"Accessoires\">Accessoires</option>
                                            </select>

                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Pourcentage</label>
                                            <input type=\"number\" min=\"1\" max=\"99\" name=\"pourcentage\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "pourcentage", [], "any", false, false, false, 103), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "description", [], "any", false, false, false, 112), "html", null, true);
            echo "</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "dateDebut", [], "any", false, false, false, 119), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 126), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                                </div>
                            </form>
                        </div>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                </div>
            </tbody>

        </table>
    </div>


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 151
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une nouvelle Promotion</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Titre</label>
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "titre", [], "any", false, false, false, 161), 'widget', ["attr" => ["placeholder" => "Titre du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Pourcentage</label>
                            ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "pourcentage", [], "any", false, false, false, 168), 'widget', ["attr" => ["placeholder" => "Pourcentage du projet", "class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Type de produit</label>
                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "typeProduit", [], "any", false, false, false, 174), 'widget', ["class" => "form-control"]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Description</label>
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "description", [], "any", false, false, false, 181), 'widget', ["attr" => ["placeholder" => "Description du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date debut</label>
                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "date_debut", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "date_fin", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'form_end');
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
        return "promo/liste_promo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 205,  355 => 196,  345 => 189,  334 => 181,  324 => 174,  315 => 168,  305 => 161,  292 => 151,  279 => 140,  259 => 126,  249 => 119,  239 => 112,  227 => 103,  208 => 89,  196 => 80,  183 => 70,  177 => 67,  162 => 55,  156 => 52,  148 => 47,  139 => 41,  134 => 39,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  105 => 30,  101 => 29,  85 => 15,  79 => 13,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Promotions</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <br>
        {% if form.pourcentage.vars.errors|length %}
            <div class=\"col-sm-12 alert alert-danger\">{{ form_errors(form.pourcentage) }}</div>
        {% endif %}
        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Pourcentage</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Type produit</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for promo in promos %}
                <tr>
                    <td >{{ promo.pourcentage }}</td>
                    <td >{{ promo.titre }}</td>
                    <td>{{ promo.description }}</td>
                    <td>{{ promo.DateDebut|date(\"m-d-Y\") }}</td>
                    <td>{{ promo.DateFin|date(\"m-d-Y\") }}</td>
                    <td>{{ promo.typeProduit }}</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal{{ promo.id }}\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ promo.id }}\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!-- Delete Modal -->
              <div class=\"modal fade\" id=\"deleteModal{{ promo.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer la promotion {{ promo.titre }}</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"{{ path('delete_promo', {'id':promo.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                                    <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                                </div>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>


                <!--  Update Modal -->
                <div class=\"modal fade\" id=\"updateModal{{ promo.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"{{ path('update_promo', {'id':promo.id}) }}\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier la promotion </h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"titre\" value=\"{{ promo.titre }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Type de produit</label>
                                            <select name=\"type_produit\" class=\"form-control\">
                                                <option value=\"{{ promo.typeProduit }}\" selected>{{ promo.typeProduit }}</option>
                                                <option value=\"Tshirts\">Tshirts</option>
                                                <option value=\"Vestes\">Vestes</option>
                                                <option value=\"Equipement\">Equipement</option>
                                                <option value=\"Pantalons\">Pantalons</option>
                                                <option value=\"Accessoires\">Accessoires</option>
                                            </select>

                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Pourcentage</label>
                                            <input type=\"number\" min=\"1\" max=\"99\" name=\"pourcentage\" value=\"{{ promo.pourcentage }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">{{ promo.description }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"{{ promo.dateDebut|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"{{ promo.dateFin|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                                </div>
                            </form>
                        </div>
            </div>

            {% endfor %}
                </div>
            </tbody>

        </table>
    </div>


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une nouvelle Promotion</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
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
                            <label class=\"form__label\">Pourcentage</label>
                            {{ form_widget(form.pourcentage, {'attr': {'placeholder': 'Pourcentage du projet', 'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Type de produit</label>
                            {{ form_widget(form.typeProduit, {'class':'form-control'}) }}
                        </div>
                    </div>
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
                            {{ form_widget(form.date_debut, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            {{ form_widget(form.date_fin, {'attr': {'class':'form-control'}}) }}
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


{% endblock %}
", "promo/liste_promo.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\project\\sporify\\templates\\promo\\liste_promo.html.twig");
    }
}
