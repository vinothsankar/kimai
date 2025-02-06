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

/* security/login.html.twig */
class __TwigTemplate_972630be9395a59664790d344d228254 extends Template
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
            'logo_login' => [$this, 'block_logo_login'],
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'login_social_auth' => [$this, 'block_login_social_auth'],
            'login_box' => [$this, 'block_login_box'],
            'login_form' => [$this, 'block_login_form'],
            'password_forgotten' => [$this, 'block_password_forgotten'],
            'registration' => [$this, 'block_registration'],
            'remember_me' => [$this, 'block_remember_me'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@theme/security/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("@theme/security/login.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo_login(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_login"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_login"));

        yield from $this->loadTemplate("partials/logo_login.html.twig", "security/login.html.twig", 3)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->generateTitle(), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        yield "    ";
        yield from $this->loadTemplate("partials/head.html.twig", "security/login.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::HTML_HEAD"));
        // line 9
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, false, 9);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 13, $this->source); })()), "isRightToLeft", [], "method", false, false, false, 13)) {
            // line 14
            yield "        ";
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app-rtl");
            yield "
    ";
        } else {
            // line 16
            yield "        ";
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
            yield "
    ";
        }
        // line 18
        yield "    ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::STYLESHEET"));
        // line 19
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    ";
        // line 24
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::JAVASCRIPT"));
        // line 25
        yield "    <script>
        let profile = localStorage.getItem('kimai_profile');
        if (profile === null) {
            ";
        // line 37
        yield "            profile = '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("\\App\\Utils\\ProfileManager::PROFILE_DESKTOP"), "html", null, true);
        yield "'
            const size = window.visualViewport !== undefined ? window.visualViewport.width : window.innerWidth;
            if (size < 576) {
                profile = '";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("\\App\\Utils\\ProfileManager::PROFILE_MOBILE"), "html", null, true);
        yield "';
            }
            localStorage.setItem('kimai_profile', profile);
        }
        document.cookie = \"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("\\App\\Utils\\ProfileManager::COOKIE_PROFILE"), "html", null, true);
        yield "=\"+profile+\"; path=/; expires=; SameSite=Strict; Secure\";
    </script>
    ";
        // line 46
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 46, $this->source); })()), "content", [], "any", false, false, false, 46);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_social_auth(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_social_auth"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_social_auth"));

        // line 50
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["saml_config"]) || array_key_exists("saml_config", $context) ? $context["saml_config"] : (function () { throw new RuntimeError('Variable "saml_config" does not exist.', 50, $this->source); })()), "isActivated", [], "method", false, false, false, 50)) {
            // line 51
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_config"]) || array_key_exists("kimai_config", $context) ? $context["kimai_config"] : (function () { throw new RuntimeError('Variable "kimai_config" does not exist.', 51, $this->source); })()), "loginFormActive", [], "any", false, false, false, 51)) {
                // line 52
                yield "            <div class=\"hr-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "TablerBundle"), "html", null, true);
                yield "</div>
        ";
            }
            // line 54
            yield "        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 56
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_config"]) || array_key_exists("kimai_config", $context) ? $context["kimai_config"] : (function () { throw new RuntimeError('Variable "kimai_config" does not exist.', 56, $this->source); })()), "loginFormActive", [], "any", false, false, false, 56)) {
                // line 57
                yield "                    <h2 class=\"card-title text-center mb-4\">";
                yield from                 $this->unwrap()->yieldBlock("login_box_msg", $context, $blocks);
                yield "</h2>
                ";
            }
            // line 59
            yield "                <div class=\"col text-center\">
                    <a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saml_login");
            yield "\" id=\"social-login-button\" tabindex=\"50\" class=\"btn btn-white w-50\">
                        ";
            // line 61
            $context["provider"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["saml_config"]) || array_key_exists("saml_config", $context) ? $context["saml_config"] : (function () { throw new RuntimeError('Variable "saml_config" does not exist.', 61, $this->source); })()), "getProvider", [], "method", false, false, false, 61);
            // line 62
            yield "                        ";
            if ( !(null === (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 62, $this->source); })()))) {
                // line 63
                yield "                            ";
                if (CoreExtension::inFilter("fa-", (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 63, $this->source); })()))) {
                    // line 64
                    yield "                                <i class=\"icon ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 64, $this->source); })()), "html", null, true);
                    yield " text-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 64, $this->source); })()), ["fas " => "", "far " => "", "fab " => ""]), "html", null, true);
                    yield "\"></i>
                            ";
                } else {
                    // line 66
                    yield "                                <i class=\"icon fab fa-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 66, $this->source); })()), "html", null, true);
                    yield " text-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 66, $this->source); })()), "html", null, true);
                    yield "\"></i>
                            ";
                }
                // line 68
                yield "                        ";
            }
            // line 69
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["saml_config"]) || array_key_exists("saml_config", $context) ? $context["saml_config"] : (function () { throw new RuntimeError('Variable "saml_config" does not exist.', 69, $this->source); })()), "getTitle", [], "method", false, false, false, 69)), "html", null, true);
            yield "
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_box(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_box"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_box"));

        // line 78
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_config"]) || array_key_exists("kimai_config", $context) ? $context["kimai_config"] : (function () { throw new RuntimeError('Variable "kimai_config" does not exist.', 78, $this->source); })()), "loginFormActive", [], "any", false, false, false, 78)) {
            // line 79
            yield "        ";
            yield from $this->yieldParentBlock("login_box", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form"));

        // line 84
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_config"]) || array_key_exists("kimai_config", $context) ? $context["kimai_config"] : (function () { throw new RuntimeError('Variable "kimai_config" does not exist.', 84, $this->source); })()), "loginFormActive", [], "any", false, false, false, 84)) {
            // line 85
            yield "        ";
            yield from $this->yieldParentBlock("login_form", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_forgotten(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_forgotten"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_forgotten"));

        // line 90
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_config"]) || array_key_exists("kimai_config", $context) ? $context["kimai_config"] : (function () { throw new RuntimeError('Variable "kimai_config" does not exist.', 90, $this->source); })()), "passwordResetActive", [], "any", false, false, false, 90)) {
            // line 91
            yield "        ";
            yield from $this->yieldParentBlock("password_forgotten", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_registration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "registration"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "registration"));

        // line 96
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_config"]) || array_key_exists("kimai_config", $context) ? $context["kimai_config"] : (function () { throw new RuntimeError('Variable "kimai_config" does not exist.', 96, $this->source); })()), "selfRegistrationActive", [], "any", false, false, false, 96)) {
            // line 97
            yield "        ";
            yield from $this->yieldParentBlock("registration", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_remember_me(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "remember_me"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "remember_me"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  468 => 101,  453 => 97,  450 => 96,  437 => 95,  422 => 91,  419 => 90,  406 => 89,  391 => 85,  388 => 84,  375 => 83,  360 => 79,  357 => 78,  344 => 77,  325 => 69,  322 => 68,  314 => 66,  306 => 64,  303 => 63,  300 => 62,  298 => 61,  294 => 60,  291 => 59,  285 => 57,  283 => 56,  279 => 54,  273 => 52,  270 => 51,  267 => 50,  254 => 49,  241 => 46,  236 => 44,  229 => 40,  222 => 37,  217 => 25,  215 => 24,  210 => 23,  197 => 22,  183 => 19,  180 => 18,  174 => 16,  168 => 14,  165 => 13,  152 => 12,  138 => 9,  135 => 8,  132 => 7,  119 => 6,  96 => 4,  73 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@theme/security/login.html.twig' %}

{% block logo_login %}{% include 'partials/logo_login.html.twig' %}{% endblock %}
{% block title %}{{- get_title() -}}{% endblock %}

{% block head %}
    {% include 'partials/head.html.twig' %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::HTML_HEAD')) %}
    {{ event.content|raw }}
{% endblock %}

{% block stylesheets %}
    {% if tabler_bundle.isRightToLeft() %}
        {{ encore_entry_link_tags('app-rtl') }}
    {% else %}
        {{ encore_entry_link_tags('app') }}
    {% endif %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::STYLESHEET')) %}
    {{ event.content|raw }}
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::JAVASCRIPT')) %}
    <script>
        let profile = localStorage.getItem('kimai_profile');
        if (profile === null) {
            {#
                screen.width = real screen width
                screen.availWidth = screen minus e.g. OS elements
                window.screen.width * window.devicePixelRatio = screen resolution is not relevant
                window.innerWidth = browser screen width minus browser elements (doesn’t include scroll bars and borders)
                window.visualViewport.width = window.innerWidth - border(?) => only a couple of pixels smaller

                See https://getbootstrap.com/docs/5.0/layout/breakpoints/ for the min width, as of v5 this is 576px
            #}
            profile = '{{ constant('\\\\App\\\\Utils\\\\ProfileManager::PROFILE_DESKTOP') }}'
            const size = window.visualViewport !== undefined ? window.visualViewport.width : window.innerWidth;
            if (size < 576) {
                profile = '{{ constant('\\\\App\\\\Utils\\\\ProfileManager::PROFILE_MOBILE') }}';
            }
            localStorage.setItem('kimai_profile', profile);
        }
        document.cookie = \"{{ constant('\\\\App\\\\Utils\\\\ProfileManager::COOKIE_PROFILE') }}=\"+profile+\"; path=/; expires=; SameSite=Strict; Secure\";
    </script>
    {{ event.content|raw }}
{% endblock %}

{% block login_social_auth %}
    {% if saml_config.isActivated() %}
        {% if kimai_config.loginFormActive %}
            <div class=\"hr-text\">{{ 'or'|trans({}, 'TablerBundle') }}</div>
        {% endif %}
        <div class=\"card-body\">
            <div class=\"row\">
                {% if not kimai_config.loginFormActive %}
                    <h2 class=\"card-title text-center mb-4\">{{ block('login_box_msg') }}</h2>
                {% endif %}
                <div class=\"col text-center\">
                    <a href=\"{{ path('saml_login') }}\" id=\"social-login-button\" tabindex=\"50\" class=\"btn btn-white w-50\">
                        {% set provider = saml_config.getProvider() %}
                        {% if provider is not null %}
                            {% if 'fa-' in provider %}
                                <i class=\"icon {{ provider }} text-{{ provider|replace({'fas ': '', 'far ': '', 'fab ': ''}) }}\"></i>
                            {% else %}
                                <i class=\"icon fab fa-{{ provider }} text-{{ provider }}\"></i>
                            {% endif %}
                        {% endif %}
                        {{ saml_config.getTitle()|trans }}
                    </a>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block login_box %}
    {% if kimai_config.loginFormActive %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block login_form %}
    {% if kimai_config.loginFormActive %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block password_forgotten %}
    {% if kimai_config.passwordResetActive %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block registration %}
    {% if kimai_config.selfRegistrationActive %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block remember_me %}{% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\kimai\\templates\\security\\login.html.twig");
    }
}
