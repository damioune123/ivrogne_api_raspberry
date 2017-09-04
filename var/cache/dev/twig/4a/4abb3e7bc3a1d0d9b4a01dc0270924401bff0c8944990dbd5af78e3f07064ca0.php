<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c2b0008093dd76ffeff1f915062a303983f5e59fa6933ac5dbefe97006071797 extends Twig_Template
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
        $__internal_4d336001136518243277230867662734a33e8ce5cbb4227a6208bf71ce8b9b54 = $this->env->getExtension("native_profiler");
        $__internal_4d336001136518243277230867662734a33e8ce5cbb4227a6208bf71ce8b9b54->enter($__internal_4d336001136518243277230867662734a33e8ce5cbb4227a6208bf71ce8b9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4d336001136518243277230867662734a33e8ce5cbb4227a6208bf71ce8b9b54->leave($__internal_4d336001136518243277230867662734a33e8ce5cbb4227a6208bf71ce8b9b54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
