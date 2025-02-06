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

/* user/api-token.html.twig */
class __TwigTemplate_0ca06e4147b2e23473001b869fecf215 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "user/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/api-token.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/api-token.html.twig"));

        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/api-token.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("user/form.html.twig", "user/api-token.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    <div class=\"card-body\">

        <div class=\"row mb-3\">
            <div class=\"col-12 col-md-6\">
                <p>
                    ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api_password.intro"), "html", null, true);
        yield "
                </p>
                <p>
                    <strong>URL</strong>: ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api.swagger_ui", [], false), ["/doc" => ""]), "html", null, true);
        yield "
                </p>
            </div>

            <div class=\"col-12 col-md-6 text-md-end\">
                <a class=\"btn action-create modal-ajax-form\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_access_token", ["username" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "userIdentifier", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("create", true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"), "html", null, true);
        yield "</a>
                <a class=\"btn\" target=\"_blank\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api.swagger_ui");
        yield "\">";
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("documentation", true);
        yield " Swagger Docs</a>
                <a class=\"btn\" target=\"_blank\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->documentationLink("rest-api.html"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("help", true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help"), "html", null, true);
        yield "</a>
            </div>
        </div>

        ";
        // line 24
        if ( !(null === (isset($context["created_token"]) || array_key_exists("created_token", $context) ? $context["created_token"] : (function () { throw new RuntimeError('Variable "created_token" does not exist.', 24, $this->source); })()))) {
            // line 25
            yield "            <div class=\"card mb-4\">
                <div class=\"ribbon bg-red\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("status.new"), "html", null, true);
            yield "</div>
                <div class=\"card-body\">
                    <h3 class=\"card-title\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["created_token"]) || array_key_exists("created_token", $context) ? $context["created_token"] : (function () { throw new RuntimeError('Variable "created_token" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
            yield "</h3>
                    <p class=\"text-secondary\"></p>
                    <p>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api_token_hidden"), "html", null, true);
            yield "</p>
                    <div class=\"codeblock\">
                        <div class=\"codeblock-copy\" style=\"position: absolute; right: 30px; padding-top: 5px\">
                            <button class=\"btn btn-icon btn-dark\" onclick=\"navigator.clipboard.writeText('";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["created_token"]) || array_key_exists("created_token", $context) ? $context["created_token"] : (function () { throw new RuntimeError('Variable "created_token" does not exist.', 33, $this->source); })()), "token", [], "any", false, false, false, 33), "html", null, true);
            yield "');\"><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-clipboard icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path><path d=\"M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z\"></path></svg></button>
                        </div>
                        <pre><code>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["created_token"]) || array_key_exists("created_token", $context) ? $context["created_token"] : (function () { throw new RuntimeError('Variable "created_token" does not exist.', 35, $this->source); })()), "token", [], "any", false, false, false, 35), "html", null, true);
            yield "</code></pre>
                    </div>
                </div>
            </div>
        ";
        }
        // line 40
        yield "
        ";
        // line 41
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["access_tokens"]) || array_key_exists("access_tokens", $context) ? $context["access_tokens"] : (function () { throw new RuntimeError('Variable "access_tokens" does not exist.', 41, $this->source); })())) > 0)) {
            // line 42
            yield "            <table class=\"table table-vcenter\">
                <thead>
                <tr>
                    <th>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name"), "html", null, true);
            yield "</th>
                    <th>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("last_usage"), "html", null, true);
            yield "</th>
                    <th>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("expires"), "html", null, true);
            yield "</th>
                    <th class=\"w-min actions\"></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["access_tokens"]) || array_key_exists("access_tokens", $context) ? $context["access_tokens"] : (function () { throw new RuntimeError('Variable "access_tokens" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["token"]) {
                // line 53
                yield "                    <tr>
                        <td>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["token"], "name", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                        <td>
                            ";
                // line 56
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["token"], "lastUsage", [], "any", false, false, false, 56))) {
                    // line 57
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateTime(CoreExtension::getAttribute($this->env, $this->source, $context["token"], "lastUsage", [], "any", false, false, false, 57)), "html", null, true);
                    yield "
                            ";
                }
                // line 59
                yield "                        </td>
                        <td>
                            ";
                // line 61
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["token"], "expiresAt", [], "any", false, false, false, 61))) {
                    // line 62
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort(CoreExtension::getAttribute($this->env, $this->source, $context["token"], "expiresAt", [], "any", false, false, false, 62)), "html", null, true);
                    yield "
                            ";
                }
                // line 64
                yield "                        </td>
                        <td>
                            ";
                // line 66
                yield $macros["widgets"]->getTemplateForMacro("macro_action_button", $context, 66, $this->getSourceContext())->macro_action_button(...["trash", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_api_token", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["token"], "id", [], "any", false, false, false, 66)]), "class" => "api-link", "attr" => ["data-question" => "confirm.delete", "data-event" => "kimai.accessToken", "data-method" => "DELETE", "data-question" => "confirm.delete", "data-msg-error" => "action.delete.error", "data-msg-success" => "action.delete.success"]]]);
                // line 73
                yield "
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['token'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                </tbody>
            </table>
        ";
        }
        // line 80
        yield "
        ";
        // line 81
        yield from $this->loadTemplate("user/api-token.html.twig", "user/api-token.html.twig", 81, "921219647")->unwrap()->yield(CoreExtension::merge($context, ["id" => "activity_invoice_settings"]));
        // line 93
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function() {
            KimaiReloadPageWidget.create('kimai.accessToken');
        });
    </script>
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
        return "user/api-token.html.twig";
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
        return array (  269 => 98,  256 => 97,  243 => 93,  241 => 81,  238 => 80,  233 => 77,  224 => 73,  222 => 66,  218 => 64,  212 => 62,  210 => 61,  206 => 59,  200 => 57,  198 => 56,  193 => 54,  190 => 53,  186 => 52,  178 => 47,  174 => 46,  170 => 45,  165 => 42,  163 => 41,  160 => 40,  152 => 35,  147 => 33,  141 => 30,  136 => 28,  131 => 26,  128 => 25,  126 => 24,  115 => 20,  109 => 19,  101 => 18,  93 => 13,  87 => 10,  80 => 5,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'user/form.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block form_body %}
    <div class=\"card-body\">

        <div class=\"row mb-3\">
            <div class=\"col-12 col-md-6\">
                <p>
                    {{ 'api_password.intro'|trans }}
                </p>
                <p>
                    <strong>URL</strong>: {{ url('api.swagger_ui', {}, false)|replace({'/doc': ''}) }}
                </p>
            </div>

            <div class=\"col-12 col-md-6 text-md-end\">
                <a class=\"btn action-create modal-ajax-form\" href=\"{{ path('user_profile_access_token', {'username': user.userIdentifier}) }}\">{{ icon('create', true) }} {{ 'create'|trans }}</a>
                <a class=\"btn\" target=\"_blank\" href=\"{{ path('api.swagger_ui') }}\">{{ icon('documentation', true) }} Swagger Docs</a>
                <a class=\"btn\" target=\"_blank\" href=\"{{ 'rest-api.html'|docu_link }}\">{{ icon('help', true) }} {{ 'help'|trans }}</a>
            </div>
        </div>

        {% if created_token is not null %}
            <div class=\"card mb-4\">
                <div class=\"ribbon bg-red\">{{ 'status.new'|trans }}</div>
                <div class=\"card-body\">
                    <h3 class=\"card-title\">{{ created_token.name }}</h3>
                    <p class=\"text-secondary\"></p>
                    <p>{{ 'api_token_hidden'|trans }}</p>
                    <div class=\"codeblock\">
                        <div class=\"codeblock-copy\" style=\"position: absolute; right: 30px; padding-top: 5px\">
                            <button class=\"btn btn-icon btn-dark\" onclick=\"navigator.clipboard.writeText('{{ created_token.token }}');\"><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-clipboard icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path><path d=\"M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z\"></path></svg></button>
                        </div>
                        <pre><code>{{ created_token.token }}</code></pre>
                    </div>
                </div>
            </div>
        {% endif %}

        {% if access_tokens|length > 0 %}
            <table class=\"table table-vcenter\">
                <thead>
                <tr>
                    <th>{{ 'name'|trans }}</th>
                    <th>{{ 'last_usage'|trans }}</th>
                    <th>{{ 'expires'|trans }}</th>
                    <th class=\"w-min actions\"></th>
                </tr>
                </thead>
                <tbody>
                {% for token in access_tokens %}
                    <tr>
                        <td>{{ token.name }}</td>
                        <td>
                            {% if token.lastUsage is not null %}
                                {{ token.lastUsage|date_time }}
                            {% endif %}
                        </td>
                        <td>
                            {% if token.expiresAt is not null %}
                                {{ token.expiresAt|date_short }}
                            {% endif %}
                        </td>
                        <td>
                            {{ widgets.action_button('trash', {'url': path('delete_api_token', {id: token.id}), class: 'api-link', 'attr': {
                                'data-question': 'confirm.delete',
                                'data-event': 'kimai.accessToken',
                                'data-method': 'DELETE',
                                'data-question': 'confirm.delete',
                                'data-msg-error': 'action.delete.error',
                                'data-msg-success': 'action.delete.success'
                            }}) }}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}

        {% embed '@theme/embeds/collapsible.html.twig' with {id: 'activity_invoice_settings'} %}
            {% import \"macros/widgets.html.twig\" as widgets %}
            {% block title %}{{ 'password'|trans }}{% endblock %}
            {% block box_class %}mt-3{% endblock %}
            {% block body %}
            {{ widgets.alert('danger', 'api_password_deprecated'|trans) }}
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-primary\" />
            {{ form_end(form) }}
            {% endblock %}
        {% endembed %}

    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function() {
            KimaiReloadPageWidget.create('kimai.accessToken');
        });
    </script>
{% endblock %}
", "user/api-token.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\api-token.html.twig");
    }
}


/* user/api-token.html.twig */
class __TwigTemplate_0ca06e4147b2e23473001b869fecf215___921219647 extends Template
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
            'title' => [$this, 'block_title'],
            'box_class' => [$this, 'block_box_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 81
        return "@theme/embeds/collapsible.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/api-token.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/api-token.html.twig"));

        // line 82
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/api-token.html.twig", 82)->unwrap();
        // line 81
        $this->parent = $this->loadTemplate("@theme/embeds/collapsible.html.twig", "user/api-token.html.twig", 81);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_class"));

        yield "mt-3";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 86
        yield "            ";
        yield $macros["widgets"]->getTemplateForMacro("macro_alert", $context, 86, $this->getSourceContext())->macro_alert(...["danger", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api_password_deprecated")]);
        yield "
            ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_start');
        yield "
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'widget');
        yield "
                <input type=\"submit\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        yield "\" class=\"btn btn-primary\" />
            ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
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
        return "user/api-token.html.twig";
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
        return array (  549 => 90,  545 => 89,  541 => 88,  537 => 87,  532 => 86,  519 => 85,  496 => 84,  473 => 83,  462 => 81,  460 => 82,  447 => 81,  269 => 98,  256 => 97,  243 => 93,  241 => 81,  238 => 80,  233 => 77,  224 => 73,  222 => 66,  218 => 64,  212 => 62,  210 => 61,  206 => 59,  200 => 57,  198 => 56,  193 => 54,  190 => 53,  186 => 52,  178 => 47,  174 => 46,  170 => 45,  165 => 42,  163 => 41,  160 => 40,  152 => 35,  147 => 33,  141 => 30,  136 => 28,  131 => 26,  128 => 25,  126 => 24,  115 => 20,  109 => 19,  101 => 18,  93 => 13,  87 => 10,  80 => 5,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'user/form.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block form_body %}
    <div class=\"card-body\">

        <div class=\"row mb-3\">
            <div class=\"col-12 col-md-6\">
                <p>
                    {{ 'api_password.intro'|trans }}
                </p>
                <p>
                    <strong>URL</strong>: {{ url('api.swagger_ui', {}, false)|replace({'/doc': ''}) }}
                </p>
            </div>

            <div class=\"col-12 col-md-6 text-md-end\">
                <a class=\"btn action-create modal-ajax-form\" href=\"{{ path('user_profile_access_token', {'username': user.userIdentifier}) }}\">{{ icon('create', true) }} {{ 'create'|trans }}</a>
                <a class=\"btn\" target=\"_blank\" href=\"{{ path('api.swagger_ui') }}\">{{ icon('documentation', true) }} Swagger Docs</a>
                <a class=\"btn\" target=\"_blank\" href=\"{{ 'rest-api.html'|docu_link }}\">{{ icon('help', true) }} {{ 'help'|trans }}</a>
            </div>
        </div>

        {% if created_token is not null %}
            <div class=\"card mb-4\">
                <div class=\"ribbon bg-red\">{{ 'status.new'|trans }}</div>
                <div class=\"card-body\">
                    <h3 class=\"card-title\">{{ created_token.name }}</h3>
                    <p class=\"text-secondary\"></p>
                    <p>{{ 'api_token_hidden'|trans }}</p>
                    <div class=\"codeblock\">
                        <div class=\"codeblock-copy\" style=\"position: absolute; right: 30px; padding-top: 5px\">
                            <button class=\"btn btn-icon btn-dark\" onclick=\"navigator.clipboard.writeText('{{ created_token.token }}');\"><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-clipboard icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path><path d=\"M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z\"></path></svg></button>
                        </div>
                        <pre><code>{{ created_token.token }}</code></pre>
                    </div>
                </div>
            </div>
        {% endif %}

        {% if access_tokens|length > 0 %}
            <table class=\"table table-vcenter\">
                <thead>
                <tr>
                    <th>{{ 'name'|trans }}</th>
                    <th>{{ 'last_usage'|trans }}</th>
                    <th>{{ 'expires'|trans }}</th>
                    <th class=\"w-min actions\"></th>
                </tr>
                </thead>
                <tbody>
                {% for token in access_tokens %}
                    <tr>
                        <td>{{ token.name }}</td>
                        <td>
                            {% if token.lastUsage is not null %}
                                {{ token.lastUsage|date_time }}
                            {% endif %}
                        </td>
                        <td>
                            {% if token.expiresAt is not null %}
                                {{ token.expiresAt|date_short }}
                            {% endif %}
                        </td>
                        <td>
                            {{ widgets.action_button('trash', {'url': path('delete_api_token', {id: token.id}), class: 'api-link', 'attr': {
                                'data-question': 'confirm.delete',
                                'data-event': 'kimai.accessToken',
                                'data-method': 'DELETE',
                                'data-question': 'confirm.delete',
                                'data-msg-error': 'action.delete.error',
                                'data-msg-success': 'action.delete.success'
                            }}) }}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}

        {% embed '@theme/embeds/collapsible.html.twig' with {id: 'activity_invoice_settings'} %}
            {% import \"macros/widgets.html.twig\" as widgets %}
            {% block title %}{{ 'password'|trans }}{% endblock %}
            {% block box_class %}mt-3{% endblock %}
            {% block body %}
            {{ widgets.alert('danger', 'api_password_deprecated'|trans) }}
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-primary\" />
            {{ form_end(form) }}
            {% endblock %}
        {% endembed %}

    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function() {
            KimaiReloadPageWidget.create('kimai.accessToken');
        });
    </script>
{% endblock %}
", "user/api-token.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\api-token.html.twig");
    }
}
