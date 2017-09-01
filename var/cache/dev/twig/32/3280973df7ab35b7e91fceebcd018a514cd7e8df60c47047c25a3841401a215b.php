<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b768161af55626deea913b62c323ce7b50186fe688eeff53766eb577a7655f7d extends Twig_Template
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
        $__internal_7b2f643307145601930655f445440b6c6bc93dbb70a72c6128cec2b41dd7670f = $this->env->getExtension("native_profiler");
        $__internal_7b2f643307145601930655f445440b6c6bc93dbb70a72c6128cec2b41dd7670f->enter($__internal_7b2f643307145601930655f445440b6c6bc93dbb70a72c6128cec2b41dd7670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7b2f643307145601930655f445440b6c6bc93dbb70a72c6128cec2b41dd7670f->leave($__internal_7b2f643307145601930655f445440b6c6bc93dbb70a72c6128cec2b41dd7670f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
