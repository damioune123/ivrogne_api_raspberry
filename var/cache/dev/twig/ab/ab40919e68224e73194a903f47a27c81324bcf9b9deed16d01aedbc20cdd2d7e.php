<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8b3b8c721cc955681aa1cd61c0e4be145bfed0a97b53d63f3c37ff4ae821a6a extends Twig_Template
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
        $__internal_bb0a8dac5cb046100b75150414ea8f895d8a1250c392b527dae2237bdd9f0476 = $this->env->getExtension("native_profiler");
        $__internal_bb0a8dac5cb046100b75150414ea8f895d8a1250c392b527dae2237bdd9f0476->enter($__internal_bb0a8dac5cb046100b75150414ea8f895d8a1250c392b527dae2237bdd9f0476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bb0a8dac5cb046100b75150414ea8f895d8a1250c392b527dae2237bdd9f0476->leave($__internal_bb0a8dac5cb046100b75150414ea8f895d8a1250c392b527dae2237bdd9f0476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
