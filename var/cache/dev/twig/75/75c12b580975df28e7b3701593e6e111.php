<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user/create.html.twig */
class __TwigTemplate_cb3bb519c66070960fe8c0a923151f57 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/create.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        yield "    ";
        $context["formEditTemplate"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 4, $this->source); })()), "modalRequest", [], "any", false, false, false, 4)) ? ("default/_form_modal.html.twig") : ("default/_form.html.twig"));
        // line 5
        yield "    ";
        $context["formOptions"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"), "form" =>         // line 7
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user")];
        // line 10
        yield "    ";
        yield from $this->loadTemplate("user/create.html.twig", "user/create.html.twig", 10, "615676600")->unwrap()->yield(CoreExtension::merge($context, (isset($context["formOptions"]) || array_key_exists("formOptions", $context) ? $context["formOptions"] : (function () { throw new RuntimeError('Variable "formOptions" does not exist.', 10, $this->source); })())));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/create.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  83 => 10,  81 => 7,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    {% set formEditTemplate = kimai_context.modalRequest ? 'default/_form_modal.html.twig' : 'default/_form.html.twig' %}
    {% set formOptions = {
        'title': 'create'|trans,
        'form': form,
        'back': path('admin_user')
    } %}
    {% embed formEditTemplate with formOptions %}
        {% block form_body %}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.username) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.email) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.plainPassword.first) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.plainPassword.second) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.alias) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.title) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md{% if form.avatar is defined %}-6{% endif %}\">
                    {{ form_row(form.color) }}
                </div>
                {% if form.avatar is defined %}
                <div class=\"col-md-6\">
                    {{ form_row(form.avatar) }}
                </div>
                {% endif %}
            </div>

            {% if form.language is defined and form.timezone is defined %}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.language) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.timezone) }}
                </div>
            </div>
            {% endif %}

            {% set length = 12 %}
            {% if form.supervisor is defined  %}
                {% set length = 6 %}
            {% endif %}

            <div class=\"row\">
                <div class=\"col-md-{{ length }}\">
                    {{ form_row(form.accountNumber) }}
                </div>
                {% if form.supervisor is defined  %}
                <div class=\"col-md-{{ length }}\">
                    {{ form_row(form.supervisor) }}
                </div>
                {% endif %}
            </div>

            {% if form.teams is defined or form.roles is defined %}
                {% set length = 12 %}
                {% if form.teams is defined and form.roles is defined %}
                    {% set length = 6 %}
                {% endif %}
                <div class=\"row\">
                    {% if form.teams is defined %}
                    <div class=\"col-md-{{ length }}\">
                        {{ form_row(form.teams) }}
                    </div>
                    {% endif %}
                    {% if form.roles is defined %}
                    <div class=\"col-md-{{ length }}\">
                        {{ form_row(form.roles) }}
                    </div>
                    {% endif %}
                </div>
            {% endif %}

            {{ form_rest(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "user/create.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\create.html.twig");
    }
}


/* user/create.html.twig */
class __TwigTemplate_cb3bb519c66070960fe8c0a923151f57___615676600 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_body' => [$this, 'block_form_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return $this->loadTemplate((isset($context["formEditTemplate"]) || array_key_exists("formEditTemplate", $context) ? $context["formEditTemplate"] : (function () { throw new RuntimeError('Variable "formEditTemplate" does not exist.', 10, $this->source); })()), "user/create.html.twig", 10);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body"));

        // line 12
        yield "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row');
        yield "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "plainPassword", [], "any", false, false, false, 23), "first", [], "any", false, false, false, 23), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), "second", [], "any", false, false, false, 26), 'row');
        yield "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "alias", [], "any", false, false, false, 32), 'row');
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), 'row');
        yield "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatar", [], "any", true, true, false, 40)) {
            yield "-6";
        }
        yield "\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "color", [], "any", false, false, false, 41), 'row');
        yield "
                </div>
                ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "avatar", [], "any", true, true, false, 43)) {
            // line 44
            yield "                <div class=\"col-md-6\">
                    ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "avatar", [], "any", false, false, false, 45), 'row');
            yield "
                </div>
                ";
        }
        // line 48
        yield "            </div>

            ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "language", [], "any", true, true, false, 50) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "timezone", [], "any", true, true, false, 50))) {
            // line 51
            yield "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "language", [], "any", false, false, false, 53), 'row');
            yield "
                </div>
                <div class=\"col-md-6\">
                    ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "timezone", [], "any", false, false, false, 56), 'row');
            yield "
                </div>
            </div>
            ";
        }
        // line 60
        yield "
            ";
        // line 61
        $context["length"] = 12;
        // line 62
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supervisor", [], "any", true, true, false, 62)) {
            // line 63
            yield "                ";
            $context["length"] = 6;
            // line 64
            yield "            ";
        }
        // line 65
        yield "
            <div class=\"row\">
                <div class=\"col-md-";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "\">
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "accountNumber", [], "any", false, false, false, 68), 'row');
        yield "
                </div>
                ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supervisor", [], "any", true, true, false, 70)) {
            // line 71
            yield "                <div class=\"col-md-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 71, $this->source); })()), "html", null, true);
            yield "\">
                    ";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "supervisor", [], "any", false, false, false, 72), 'row');
            yield "
                </div>
                ";
        }
        // line 75
        yield "            </div>

            ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "teams", [], "any", true, true, false, 77) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", true, true, false, 77))) {
            // line 78
            yield "                ";
            $context["length"] = 12;
            // line 79
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "teams", [], "any", true, true, false, 79) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", true, true, false, 79))) {
                // line 80
                yield "                    ";
                $context["length"] = 6;
                // line 81
                yield "                ";
            }
            // line 82
            yield "                <div class=\"row\">
                    ";
            // line 83
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "teams", [], "any", true, true, false, 83)) {
                // line 84
                yield "                    <div class=\"col-md-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 84, $this->source); })()), "html", null, true);
                yield "\">
                        ";
                // line 85
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "teams", [], "any", false, false, false, 85), 'row');
                yield "
                    </div>
                    ";
            }
            // line 88
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", true, true, false, 88)) {
                // line 89
                yield "                    <div class=\"col-md-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 89, $this->source); })()), "html", null, true);
                yield "\">
                        ";
                // line 90
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "roles", [], "any", false, false, false, 90), 'row');
                yield "
                    </div>
                    ";
            }
            // line 93
            yield "                </div>
            ";
        }
        // line 95
        yield "
            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'rest');
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/create.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  469 => 96,  466 => 95,  462 => 93,  456 => 90,  451 => 89,  448 => 88,  442 => 85,  437 => 84,  435 => 83,  432 => 82,  429 => 81,  426 => 80,  423 => 79,  420 => 78,  418 => 77,  414 => 75,  408 => 72,  403 => 71,  401 => 70,  396 => 68,  392 => 67,  388 => 65,  385 => 64,  382 => 63,  379 => 62,  377 => 61,  374 => 60,  367 => 56,  361 => 53,  357 => 51,  355 => 50,  351 => 48,  345 => 45,  342 => 44,  340 => 43,  335 => 41,  329 => 40,  321 => 35,  315 => 32,  306 => 26,  300 => 23,  291 => 17,  285 => 14,  281 => 12,  268 => 11,  83 => 10,  81 => 7,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    {% set formEditTemplate = kimai_context.modalRequest ? 'default/_form_modal.html.twig' : 'default/_form.html.twig' %}
    {% set formOptions = {
        'title': 'create'|trans,
        'form': form,
        'back': path('admin_user')
    } %}
    {% embed formEditTemplate with formOptions %}
        {% block form_body %}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.username) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.email) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.plainPassword.first) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.plainPassword.second) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.alias) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.title) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md{% if form.avatar is defined %}-6{% endif %}\">
                    {{ form_row(form.color) }}
                </div>
                {% if form.avatar is defined %}
                <div class=\"col-md-6\">
                    {{ form_row(form.avatar) }}
                </div>
                {% endif %}
            </div>

            {% if form.language is defined and form.timezone is defined %}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {{ form_row(form.language) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.timezone) }}
                </div>
            </div>
            {% endif %}

            {% set length = 12 %}
            {% if form.supervisor is defined  %}
                {% set length = 6 %}
            {% endif %}

            <div class=\"row\">
                <div class=\"col-md-{{ length }}\">
                    {{ form_row(form.accountNumber) }}
                </div>
                {% if form.supervisor is defined  %}
                <div class=\"col-md-{{ length }}\">
                    {{ form_row(form.supervisor) }}
                </div>
                {% endif %}
            </div>

            {% if form.teams is defined or form.roles is defined %}
                {% set length = 12 %}
                {% if form.teams is defined and form.roles is defined %}
                    {% set length = 6 %}
                {% endif %}
                <div class=\"row\">
                    {% if form.teams is defined %}
                    <div class=\"col-md-{{ length }}\">
                        {{ form_row(form.teams) }}
                    </div>
                    {% endif %}
                    {% if form.roles is defined %}
                    <div class=\"col-md-{{ length }}\">
                        {{ form_row(form.roles) }}
                    </div>
                    {% endif %}
                </div>
            {% endif %}

            {{ form_rest(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "user/create.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\create.html.twig");
    }
}
