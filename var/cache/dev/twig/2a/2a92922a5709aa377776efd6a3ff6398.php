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

/* @Tabler/includes/navbar_user.html.twig */
class __TwigTemplate_728eac1778eba5eff07bdd6d936ada92 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/navbar_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/navbar_user.html.twig"));

        // line 1
        $context["user"] = null;
        // line 2
        $context["links"] = null;
        // line 3
        $context["userdetails"] = $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->getUserDetails();
        // line 4
        if ( !(null === (isset($context["userdetails"]) || array_key_exists("userdetails", $context) ? $context["userdetails"] : (function () { throw new RuntimeError('Variable "userdetails" does not exist.', 4, $this->source); })()))) {
            // line 5
            yield "    ";
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userdetails"]) || array_key_exists("userdetails", $context) ? $context["userdetails"] : (function () { throw new RuntimeError('Variable "userdetails" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5);
            // line 6
            yield "    ";
            $context["links"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userdetails"]) || array_key_exists("userdetails", $context) ? $context["userdetails"] : (function () { throw new RuntimeError('Variable "userdetails" does not exist.', 6, $this->source); })()), "links", [], "any", false, false, false, 6);
            // line 7
            yield "    ";
            $context["showLogoutLink"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userdetails"]) || array_key_exists("userdetails", $context) ? $context["userdetails"] : (function () { throw new RuntimeError('Variable "userdetails" does not exist.', 7, $this->source); })()), "showLogoutLink", [], "any", false, false, false, 7);
        }
        // line 9
        if ( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "    <div class=\"nav-item dropdown\">
        <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-0\" data-bs-toggle=\"dropdown\" aria-label=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open personal menu", [], "TablerBundle"), "html", null, true);
            yield "\">
            ";
            // line 12
            $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@Tabler/components/avatar.html.twig", "@Tabler/includes/navbar_user.html.twig", 12)->unwrap();
            // line 13
            yield "            ";
            yield $macros["macro"]->getTemplateForMacro("macro_avatar", $context, 13, $this->getSourceContext())->macro_avatar(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "sm"]);
            yield "
            ";
            // line 14
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 14, $this->source); })()), "isCondensedUserMenu", [], "method", false, false, false, 14)) {
                // line 15
                yield "            <div class=\"d-none d-xl-block ps-2\">
                <div>";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
                yield "</div>
                ";
                // line 17
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17))) {
                    // line 18
                    yield "                    <div class=\"mt-1 small text-body-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
                    yield "</div>
                ";
                }
                // line 20
                yield "            </div>
            ";
            }
            // line 22
            yield "        </a>
        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 25
                yield "                ";
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 25))) {
                    // line 26
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->getRouteByAlias(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 26)), CoreExtension::getAttribute($this->env, $this->source, $context["link"], "routeArgs", [], "any", false, false, false, 26)), "html", null, true);
                    yield "\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, false, 26)), "html", null, true);
                    yield "</a>
                ";
                } else {
                    // line 28
                    yield "                    <a href=\"#\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, false, 28)), "html", null, true);
                    yield "</a>
                ";
                }
                // line 30
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "            ";
            if ((isset($context["showLogoutLink"]) || array_key_exists("showLogoutLink", $context) ? $context["showLogoutLink"] : (function () { throw new RuntimeError('Variable "showLogoutLink" does not exist.', 31, $this->source); })())) {
                // line 32
                yield "                <div class=\"dropdown-divider\"></div>
                <a href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
                yield "\" class=\"dropdown-item\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "TablerBundle"), "html", null, true);
                yield "</a>
            ";
            }
            // line 35
            yield "        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Tabler/includes/navbar_user.html.twig";
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
        return array (  147 => 35,  140 => 33,  137 => 32,  134 => 31,  128 => 30,  122 => 28,  114 => 26,  111 => 25,  107 => 24,  103 => 22,  99 => 20,  93 => 18,  91 => 17,  87 => 16,  84 => 15,  82 => 14,  77 => 13,  75 => 12,  71 => 11,  68 => 10,  66 => 9,  62 => 7,  59 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set user = null %}
{% set links = null %}
{% set userdetails = tabler_user() %}
{% if userdetails is not null %}
    {% set user = userdetails.user %}
    {% set links = userdetails.links %}
    {% set showLogoutLink = userdetails.showLogoutLink %}
{% endif %}
{% if user is not null %}
    <div class=\"nav-item dropdown\">
        <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-0\" data-bs-toggle=\"dropdown\" aria-label=\"{{ 'Open personal menu'|trans({}, 'TablerBundle') }}\">
            {% import \"@Tabler/components/avatar.html.twig\" as macro %}
            {{ macro.avatar(user, 'sm') }}
            {% if not tabler_bundle.isCondensedUserMenu() %}
            <div class=\"d-none d-xl-block ps-2\">
                <div>{{ user.name }}</div>
                {% if user.title is not empty %}
                    <div class=\"mt-1 small text-body-secondary\">{{ user.title }}</div>
                {% endif %}
            </div>
            {% endif %}
        </a>
        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
            {% for link in links %}
                {% if link.route is not null %}
                    <a href=\"{{ path(link.route|tabler_route, link.routeArgs) }}\" class=\"dropdown-item\">{{ link.label|trans }}</a>
                {% else %}
                    <a href=\"#\" class=\"dropdown-item\">{{ link.label|trans }}</a>
                {% endif %}
            {% endfor %}
            {% if showLogoutLink %}
                <div class=\"dropdown-divider\"></div>
                <a href=\"{{ logout_path() }}\" class=\"dropdown-item\">{{ 'Sign out'|trans({}, 'TablerBundle') }}</a>
            {% endif %}
        </div>
    </div>
{% endif %}
", "@Tabler/includes/navbar_user.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\includes\\navbar_user.html.twig");
    }
}
