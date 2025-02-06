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

/* partials/user-shortcuts.html.twig */
class __TwigTemplate_8ecdbbfdea897ecfaa7570dc316d64a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/user-shortcuts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/user-shortcuts.html.twig"));

        // line 1
        $context["user_shortcuts"] = $this->env->getRuntime('App\Twig\Runtime\MenuExtension')->getUserShortcuts(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1));
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["user_shortcuts"]) || array_key_exists("user_shortcuts", $context) ? $context["user_shortcuts"] : (function () { throw new RuntimeError('Variable "user_shortcuts" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            yield "    <div class=\"nav-item dropdown d-flex me-1 user-shortcuts\">
        <a class=\"btn btn-icon px-0 user-shortcuts-toggle\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"true\" title=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("favorite_routes"), "html", null, true);
            yield "\">
            ";
            // line 5
            yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("far fa-bookmark", true);
            yield "
        </a>
        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow dropdown-menu-card\" data-bs-popper=\"static\">
            <div class=\"card\">
                <div class=\"card-header text-nowrap\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("favorite_routes"), "html", null, true);
            yield "</div>
                <div class=\"card-body user-shortcuts-list scrollable-container p-0 pb-2\">
                    <div class=\"row overflow-visible g-0\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["user_shortcuts"]) || array_key_exists("user_shortcuts", $context) ? $context["user_shortcuts"] : (function () { throw new RuntimeError('Variable "user_shortcuts" does not exist.', 12, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 13
                yield "                                ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13) && ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13) % 2) == 0))) {
                    // line 14
                    yield "                    </div>
                    <div class=\"row overflow-visible g-0\">
                                ";
                }
                // line 17
                yield "                            <div class=\"text-center pt-3 px-3 col\">
                                <a href=\"";
                // line 18
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "route", [], "any", false, false, false, 18));
                yield "\" class=\"text-decoration-none\">
                                    <span class=\"user-shortcuts-icon rounded-circle mb-2\">
                                      <i class=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 20)), "html", null, true);
                yield " fs-2\"></i>
                                    </span>
                                </a>
                                <a href=\"";
                // line 23
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "route", [], "any", false, false, false, 23));
                yield "\" class=\"nav-link\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "label", [], "any", false, false, false, 24)), "html", null, true);
                // line 25
                yield "</a>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                        ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["user_shortcuts"]) || array_key_exists("user_shortcuts", $context) ? $context["user_shortcuts"] : (function () { throw new RuntimeError('Variable "user_shortcuts" does not exist.', 28, $this->source); })())) > 1) && ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["user_shortcuts"]) || array_key_exists("user_shortcuts", $context) ? $context["user_shortcuts"] : (function () { throw new RuntimeError('Variable "user_shortcuts" does not exist.', 28, $this->source); })())) % 2) == 1))) {
                // line 29
                yield "                            <div class=\"pt-3 px-3 col\"></div>
                        ";
            }
            // line 31
            yield "                    </div>
                </div>
            </div>
        </div>
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
        return "partials/user-shortcuts.html.twig";
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
        return array (  139 => 31,  135 => 29,  132 => 28,  116 => 25,  114 => 24,  111 => 23,  105 => 20,  100 => 18,  97 => 17,  92 => 14,  89 => 13,  72 => 12,  66 => 9,  59 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set user_shortcuts = user_shortcuts(app.user) %}
{% if user_shortcuts|length > 0 %}
    <div class=\"nav-item dropdown d-flex me-1 user-shortcuts\">
        <a class=\"btn btn-icon px-0 user-shortcuts-toggle\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"true\" title=\"{{ 'favorite_routes'|trans }}\">
            {{ icon('far fa-bookmark', true) }}
        </a>
        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow dropdown-menu-card\" data-bs-popper=\"static\">
            <div class=\"card\">
                <div class=\"card-header text-nowrap\">{{ 'favorite_routes'|trans }}</div>
                <div class=\"card-body user-shortcuts-list scrollable-container p-0 pb-2\">
                    <div class=\"row overflow-visible g-0\">
                        {% for menu in user_shortcuts %}
                                {% if not loop.first and loop.index0 % 2 == 0 %}
                    </div>
                    <div class=\"row overflow-visible g-0\">
                                {% endif %}
                            <div class=\"text-center pt-3 px-3 col\">
                                <a href=\"{{ path(menu.route) }}\" class=\"text-decoration-none\">
                                    <span class=\"user-shortcuts-icon rounded-circle mb-2\">
                                      <i class=\"{{ menu.icon|icon }} fs-2\"></i>
                                    </span>
                                </a>
                                <a href=\"{{ path(menu.route) }}\" class=\"nav-link\">
                                    {{- menu.label|trans -}}
                                </a>
                            </div>
                        {% endfor %}
                        {% if user_shortcuts|length > 1 and user_shortcuts|length % 2 == 1 %}
                            <div class=\"pt-3 px-3 col\"></div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "partials/user-shortcuts.html.twig", "C:\\wamp64\\www\\kimai\\templates\\partials\\user-shortcuts.html.twig");
    }
}
