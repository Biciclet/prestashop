<?php

/* PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig */
class __TwigTemplate_d02430dc1929f3178d0e0f18f1ec7728d9a8d3bfa01c1018444e133ed0e3d360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"module-top-menu\">
    <div class=\"row\">
        <div class=\"col-md-8 module-menu-item\">
            ";
        // line 28
        if (array_key_exists("topMenuData", $context)) {
            // line 29
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 29)->display(array_merge($context, array("topMenuData" => (isset($context["topMenuData"]) ? $context["topMenuData"] : null))));
            // line 30
            echo "            ";
        }
        // line 31
        echo "            ";
        if ((array_key_exists("requireFilterStatus", $context) && ((isset($context["requireFilterStatus"]) ? $context["requireFilterStatus"] : null) == true))) {
            // line 32
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_status.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 32)->display($context);
            // line 33
            echo "            ";
        }
        // line 34
        echo "        </div>

        <div class=\"col-md-4\">
            <div class=\"input-group module-search-block\">
                <span class=\"input-group-addon module-search-icon\">
                    <i class=\"material-icons\">search</i>
                </span>
                <input id=\"module-search-bar\" class=\"module-search-bar form-control\" type=\"text\">
            </div>
        </div>

    </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 50
        $context["js_translatable"] = twig_array_merge(array("Search - placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search modules: keyword, name, author...", array(), "Admin.Modules.Help")),         // line 52
(isset($context["js_translatable"]) ? $context["js_translatable"] : null));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 52,  59 => 50,  41 => 34,  38 => 33,  35 => 32,  32 => 31,  29 => 30,  26 => 29,  24 => 28,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/menu_top.html.twig");
    }
}